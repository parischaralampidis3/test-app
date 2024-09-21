<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
<form method="POST" action="{{ route('company.update', $company->id) }}">
    @csrf
    @method('PUT')

    <div>
        <label>Company Name:</label>
        <input type="text" name="name" id="name" value="{{ old('name', $company->name) }}">
        @error('name')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label>Address</label>
        <input type="text" name="address" id="address" value="{{ old('address', $company->address) }}">
        @error('address')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label>Email</label>
        <input type="text" name="email" id="email" value="{{ old('email', $company->email) }}">
        @error('email')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label>Website</label>
        <input type="text" name="website" id="website" value="{{ old('website', $company->website) }}">
        @error('website')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <button type="submit">Submit</button>
</form>

    </div>
</body>
</html>
    
</body>
</html>