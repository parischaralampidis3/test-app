<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
<section>
  <div class="w-full">
    <table class="items-center bg-transparent w-full border-collapse sm:table-auto">
      <thead >
          <tr>
            <th class="px-4 sm:px-6 md:px-8 lg:px-10 xl:px-12 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left" >
              Name
            </th>
          </tr>
            <tr>
            <th class="px-4 sm:px-6 md:px-8 lg:px-10 xl:px-12 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left" >
              Address
            </th>
          </tr>
            <tr>
            <th class="px-4 sm:px-6 md:px-8 lg:px-10 xl:px-12 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left" >
              Email
            </th>
          </tr>
            <tr>
            <th class="px-4 sm:px-6 md:px-8 lg:px-10 xl:px-12 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left" >
              Website
            </th>
          </tr>
      </thead>
      <tbody>
        @foreach ( $companies as $company  )
            <tr>
              <td>
                {!! $company->name!!}
              </td>
                <td>
                {!! $company->address!!}
              </td>
                <td>
                {!! $company->email!!}
              </td>
                <td>
                {!! $company->website!!}
              </td>
            </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</section>
</body>
</html>