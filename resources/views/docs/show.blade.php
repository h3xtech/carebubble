@extends('layouts.docs')

@section('content')
  <div class="content">
      @if($doc != null)
        <div class="overflow-hidden content-section" id="content-get-started">
            <h1 id="get-started">{{$doc->title}}</h1>
            {!!$doc->content!!}
        </div>
      @endif
      @if($gets != null)
        <div class="overflow-hidden content-section" id="content-get-characters">
            <h2 id="get-characters">GET REQUESTS</h2>
            <pre>
              <code class="bash">
              # Here is a curl example
              curl \
              -X POST http://api.westeros.com/character/get \
              -F 'secret_key=your_api_key' \
              -F 'house=Stark,Bolton' \
              -F 'offset=0' \
              -F 'limit=50'
              </code>
            </pre>
            <p>
                To get characters you need to make a POST call to the following url :<br>
                <code class="higlighted">http://api.westeros.com/character/get</code>
            </p>
            <br>
            <pre><code class="json">
              Result example :

              {
                query:{
                  offset: 0,
                  limit: 50,
                  house: [
                    "Stark",
                    "Bolton"
                  ],
                }
                result: [
                  {
                    id: 1,
                    first_name: "Jon",
                    last_name: "Snow",
                    alive: true,
                    house: "Stark",
                    gender: "m",
                    age: 14,
                    location: "Winterfell"
                  }
                ]
              }
            </code></pre>
            <h4>QUERY PARAMETERS</h4>
            <table>
                <thead>
                    <tr>
                        <th>Field</th>
                        <th>Type</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>secret_key</td>
                        <td>String</td>
                        <td>Your API key.</td>
                    </tr>
                    <tr>
                        <td>search</td>
                        <td>String</td>
                        <td>(optional) A search word to find character by name.</td>
                    </tr>
                </tbody>
            </table>
        </div>
      @endif
      @if($posts != null)
        <div class="overflow-hidden content-section" id="content-get-characters">
            <h2 id="get-characters">GET REQUESTS</h2>
            <pre>
              <code class="bash">
              # Here is a curl example
              curl \
              -X POST http://api.westeros.com/character/get \
              -F 'secret_key=your_api_key' \
              -F 'house=Stark,Bolton' \
              -F 'offset=0' \
              -F 'limit=50'
              </code>
            </pre>
            <p>
                To get characters you need to make a POST call to the following url :<br>
                <code class="higlighted">http://api.westeros.com/character/get</code>
            </p>
            <br>
            <pre><code class="json">
              Result example :

              {
                query:{
                  offset: 0,
                  limit: 50,
                  house: [
                    "Stark",
                    "Bolton"
                  ],
                }
                result: [
                  {
                    id: 1,
                    first_name: "Jon",
                    last_name: "Snow",
                    alive: true,
                    house: "Stark",
                    gender: "m",
                    age: 14,
                    location: "Winterfell"
                  }
                ]
              }
            </code></pre>
            <h4>QUERY PARAMETERS</h4>
            <table>
                <thead>
                    <tr>
                        <th>Field</th>
                        <th>Type</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>secret_key</td>
                        <td>String</td>
                        <td>Your API key.</td>
                    </tr>
                    <tr>
                        <td>search</td>
                        <td>String</td>
                        <td>(optional) A search word to find character by name.</td>
                    </tr>
                </tbody>
            </table>
        </div>
      @endif
  </div>
@endsection
