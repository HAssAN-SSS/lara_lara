<x-layout>
    <main>
        <form action="/inscrire" class="inscrire" method="POST">
            @csrf
            <input type="text" name="nombre" value="{{old('nombre')}}" id="nombre" placeholder="nombre">
            <input type="text" name="lnombre" value="{{old('lnombre')}}" id="lnombre" placeholder="lnombre">
            <input type="email" name="email" value="{{old('email')}}" id="correo" placeholder="correo">
            <input type="password" name="password" id="password" placeholder="password">
            @error('password')
            <p class="danger">{{$message}}</p>
                
            @enderror
            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="password_confirmation">
            <button type="submit" class="inscrire-btn">inscrire</button>
        </form>
    </main>
</x-layout>