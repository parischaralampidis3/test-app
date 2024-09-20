<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
<form method="POST" action="{{ url('create') }}">
    @csrf
    <div>
        <label>Name</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" required>
        @error('name')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label>Address</label>
        <input type="text" name="address" id="address" value="{{ old('address') }}" required>
        @error('address')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label>Email</label>
        <input type="text" name="email" id="email" value="{{ old('email') }}" required>
        @error('email')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label>Website</label>
        <input type="text" name="website" id="website" value="{{ old('website') }}" required>
        @error('website')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <button type="submit">Submit</button>
</form>

    </div>
</body>
</html>