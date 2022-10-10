<html>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  <wireui:scripts />
  <script src="//unpkg.com/alpinejs" defer></script>
  <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
  <script src='https://api.mapbox.com/mapbox-gl-js/v2.6.0/mapbox-gl.js'></script>
  <link href='https://api.mapbox.com/mapbox-gl-js/v2.6.0/mapbox-gl.css' rel='stylesheet' />

  @livewireStyles
</head>

<body>
  <form action="{{ route('upload') }}" method="POST">
    {{--
    @if ($error->any())
      @dd($error)
    @endif --}}

    @php
      $date = now()->addMinutes(30);
    @endphp
    @csrf
    {{-- <input type="file" name="photo"> --}}
    <livewire:uploadimage componentId="person_photo" />
    <livire:uploadimage componentId="car_photo" />
    <x-mapbox style="height: 500px" />
    <x-email class="form-control" placeholder="Hi, im a email" />
    <x-countdown :expires="$date" />
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  @livewireScripts

  <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>

  <script>
    // Get a reference to the file input element
    // const inputElement = document.querySelector('input[type="file"]');

    // // Create a FilePond instance
    // const pond = FilePond.create(inputElement);

    // FilePond.setOptions({
    //   server: {
    //     url: '/file-upload',
    //     process: {
    //       headers: {
    //         'X-CSRF-TOKEN': "{{ csrf_token() }}",
    //       }
    //     }
    //   }
    // });
  </script>
</body>



</html>
