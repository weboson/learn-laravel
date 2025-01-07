{{--    подключение component--}}
<x-layout>
    <h1 class="title">Register a new account</h1>

    <div class="mx-auto max-w-screen-sm card">
        <form action="{{ route('register') }}" method="post">
            {{--@csrf -токен используется для защиты от межсайтовых атак--}}
            @csrf
            {{-- Username--}}
            <div class="mb-4">
                <label for="username">Username</label>
                <input type="text" name="username" class="input" value="{{ old('username') }}" style="@error('username') border: 1px solid red @enderror">
            {{--сообщение об ошибке при валидации из AuthController--}}
                @error('username')
                <p class="error">{{ $message }}: - поле не должно быть пустым.</p>
                @enderror
            </div>

            {{-- Email--}}
            <div class="mb-4">
                <label for="email">Email</label>
                <input type="text" name="email" class="input" value="{{ old('email') }}" style="@error('email') border: 1px solid red @enderror">
                @error('email')
                <p class="error">{{ $message }}: - поле не должно быть пустым.</p>
                @enderror
            </div>

            {{-- Password--}}
            <div class="mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" class="input" style="@error('password') border: 1px solid red @enderror">

                @error('password')
                <p class="error">{{ $message }}</p>
                @enderror
            </div>

            {{-- Confirm Password--}}
            <div class="mb-8">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" class="input" style="@error('password') border: 1px solid red @enderror">
                @error('password')
                <p class="error">{{ $message }}</p>
                @enderror
            </div>

            {{--Submit Button--}}
            <button class="primary-btn">Register</button>
        </form>
    </div>
</x-layout>
