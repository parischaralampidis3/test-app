<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form class="POST" action:"/">
            @csrf
            <div>
                <label>
                    Name
                </label>
                <input
                type="text"
                name="name"
                id="name"
                value = {{old('name')}}
                required>
            </div>
            @error('name')
            <p>
                {{message}}
            </p>
            @enderror

            <div>
                <label>
                    Address
                </label>
                <input
                type="text"
                name="address"
                id="address"
                value = {{old('address')}}
                required>
            </div>
            @error('address')
            <p>
                {{message}}
            </p>
            @enderror

            <div>
                <label>
                    Email
                </label>
                <input
                type="text"
                name="email"
                id="emaill"
                value = {{old('email')}}
                required>
            </div>
            @error('email')
            <p>
                {{message}}
            </p>
            @enderror

            <div>
                <label>
                    Website
                </label>
                <input
                type="text"
                name="website"
                id="website"
                value = {{old('website')}}
                required>
            </div>
            @error('website')
            <p>
                {{message}}
            </p>
            @enderror            
        </form>
    </div>
</body>
</html>