@php
    use Knuckles\Scribe\Tools\WritingUtils as u;
    /** @var  Knuckles\Camel\Output\OutputEndpointData $endpoint */
@endphp

```java
import java.net.URI;
import java.net.http.HttpClient;
import java.net.http.HttpRequest;
import java.net.http.HttpResponse;

public class MyApiClient {
    public static void main(String[] args) throws Exception {
        HttpClient client = HttpClient.newHttpClient();
        HttpRequest request = HttpRequest.newBuilder()
                .uri(new URI("{!! rtrim($baseUrl, '/') !!}/{{ $endpoint->boundUri }}"))
                .@if($endpoint->httpMethods[0] === 'post' || $endpoint->httpMethods[0] === 'put' || $endpoint->httpMethods[0] === 'patch')
                .header("Content-Type", "application/json")
                .@endif
                .@if(!empty($endpoint->headers))
                @foreach($endpoint->headers as $header => $value)
                .header("{{$header}}", "{{$value}}")
                @endforeach
                @endif
                .@if(count($endpoint->cleanQueryParameters))
                .uri(new URI("{!! rtrim($baseUrl, '/') !!}/{{ $endpoint->boundUri }}?" + {!! u::printQueryParamsAsKeyValue($endpoint->cleanQueryParameters, "\"", ":", 4, "{}") !!}))
                @endif
                .@if(count($endpoint->cleanBodyParameters))
                @if($endpoint->headers['Content-Type'] == 'application/x-www-form-urlencoded')
                .POST(HttpRequest.BodyPublishers.ofString("{!! http_build_query($endpoint->cleanBodyParameters, '', '&') !!}"))
                @else
                .@if($endpoint->headers['Content-Type'] == 'multipart/form-data' && count($endpoint->fileParameters))
                // Handle multipart/form-data with files
                .POST(HttpRequest.BodyPublishers.ofString("Your multipart/form-data body"))
                .@else
                .method("{{$endpoint->httpMethods[0]}}", HttpRequest.BodyPublishers.ofString({!! json_encode($endpoint->cleanBodyParameters, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) !!}))
                .@endif
                @endif
                @endif
                .build();

        HttpResponse<String> response = client.send(request, HttpResponse.BodyHandlers.ofString());
        System.out.println(response.body());
    }
}
