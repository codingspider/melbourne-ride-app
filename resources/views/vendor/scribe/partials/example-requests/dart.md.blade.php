@php
    use Knuckles\Scribe\Tools\WritingUtils as u;
    /** @var  Knuckles\Camel\Output\OutputEndpointData $endpoint */
@endphp

```dart
import 'dart:convert';
import 'package:http/http.dart' as http;

void main() async {
  var url = Uri.parse('{!! rtrim($baseUrl, '/') !!}/{{ $endpoint->boundUri }}');
  
  var headers = <String, String>{
    @if(!empty($endpoint->headers))
    @foreach($endpoint->headers as $header => $value)
      '{{$header}}': '{{$value}}',
    @endforeach
    @endif
  };

  var queryParameters = {
    @if(count($endpoint->cleanQueryParameters))
    @foreach($endpoint->cleanQueryParameters as $parameter => $value)
      '{{$parameter}}': '{{$value}}',
    @endforeach
    @endif
  };

  var requestBody = @if(count($endpoint->cleanBodyParameters))
    @if($endpoint->headers['Content-Type'] == 'application/x-www-form-urlencoded')
      Uri(queryParameters: {!! u::printQueryParamsAsKeyValue($endpoint->cleanBodyParameters, "'", ":", 2, "{}") !!}).query;
    @else
      jsonEncode({!! json_encode($endpoint->cleanBodyParameters, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) !!});
    @endif
  @endif
  
  var response = await http.post(
    url.replace(queryParameters: queryParameters),
    headers: headers,
    body: requestBody,
  );

  print(response.body);
}
