<x-app-layout>

    <div class="container">
    ąęśćźżłóń
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Birthday</th>
              <th scope="col">Last login</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($users as $user)
              <tr>
              <th scope="row">{{ $user->id}}</th>
              <td>{{ $user->name}}</td>
              <td>{{ $user->email}}</td>
              <td>{{ $user->birthday->formatLocalized('%d %B')}}</td>
              <td> last login</td>
            </tr>
          @endforeach
            
          </tbody>
    </table>
</x-app-layout>


        
    </body>
</html>
