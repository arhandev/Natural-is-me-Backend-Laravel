<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Naturalisme | Jual Tanaman Hias Jakarta</title>

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    @stack('styles')
  </head>

  <body>

    <div>
        <div class="min-w-screen min-h-screen  flex items-center justify-center px-5 py-5">
          <div
            class=" text-gray-500 rounded-3xl shadow-xl w-full overflow-hidden"
            style="max-width: 1000px;"
          >
            <div class="md:flex w-full">
              <div class="hidden md:block w-1/2 py-10 px-10">
                <img src="{{ asset('images/login.png') }}" alt="login" />
              </div>
              <div class="w-full md:w-1/2 py-10 px-5 md:px-10">
                <div class="text-center mb-10">
                  <h1 class="font-bold text-3xl text-gray-900">Login</h1>
                  <p>Sign in to access your account</p>
                </div>
                <form action="{{ route('login.store') }}" method="POST">
                @csrf
                  <div class="flex -mx-3">
                    <div class="w-full px-3 mb-5">
                      <label htmlFor class="text-base font-semibold px-1">
                          Email
                    </label>
                      <div class="flex">
                        <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                          <i class="mdi mdi-email-outline text-gray-400 text-lg" >
                              </i>
                        </div>
                        <input
                          type="email"
                          class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-blue-500"
                          placeholder="example@gmail.com"
                          name="email"
                        />
                      </div>
                      @error('email')
                        <div>
                            {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>
                  <div class="flex -mx-3">
                    <div class="w-full px-3 mb-7">
                      <label htmlFor class="text-base font-semibold px-1">
                        Password
                      </label>
                      <div class="flex">
                        <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                          <i class="mdi mdi-lock-outline text-gray-400 text-lg" >
                         </i>
                        </div>
                        <input
                          type="password"
                          class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-blue-500"
                          placeholder="************"
                          name="password"
                        />
                      </div>
                      @error('password')
                        <div>
                            {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>
                  <div class="flex -mx-3">
                    <div class="w-full px-3 mb-5">
                      <button type="submit" class="block w-full max-w-xs mx-auto bg-blue-500 hover:bg-blue-700 focus:bg-blue-700 text-white rounded-lg px-3 py-3 font-semibold">
                        LOGIN
                      </button>
                      <div class="text-center my-5">OR</div>
                      <a href="{{ route('google') }}" class=" flex flex-wrap justify-center text-center w-full max-w-xs mx-auto border hover:bg-gray-100  text-white rounded-lg px-3 py-3 font-semibold">
                          <img src="{{ asset('images/gogle.png') }}" alt="google" class="w-5 items-center">
                      </a>
                    </div>
                  </div>
                  <div class="text-center">
                    Belum punya akun?
                    <a href="{{ route('register') }}">
                     <span class="text-blue-500"> Daftar disini</span>   
                    </a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      
    @stack('scripts')
    
    <script>
      const button = document.querySelector('#butonn');
      const menu = document.querySelector('#menu');

      button.addEventListener('click', () => {
          menu.classList.toggle("hidden")
      })
    </script>
  </body>
</html>
