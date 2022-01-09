<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" /> 
    <!-- Menginstruksikan website bahwa ini format utf-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Dengan code diatas, tampilan website dapat menyesuaikan lebar dari device -->
    <meta name="theme-color" content="#000000" />
    <!-- Dengan kode diasa, Warna tema nya berwarna hitam -->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />

    <link
    rel="stylesheet"
    href="{{asset('css/app.css')}}"
    />
    <title>Login | Ruang Cipta Teknologi</title>
    
    <!-- Title dari halaman -->
</head>
<body class="text-gray-800 antialiased"> 
    @if($errors->any())
<div id="error-box">
    {{dd($errors)}}
</div>
@endif
    <!-- Warna text abu abu -->
    <nav
        class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 "
        >
        <div
            class="container px-4 mx-auto flex flex-wrap items-center justify-between"
        >
            <div
            class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start"
            >
            <a
                class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-white"
                href="https://www.ruangciptateknologi.com"
                
                >Ruang Cipta Teknologi</a
            >
            <!-- Link menuju website Ruang Cipta Teknologi -->
            </button>
            </div>
        </div>
    </nav>
    <main>
        <section class="absolute w-full h-full">
            <div
                class="absolute top-0 w-full h-full bg-gray-900"
                style="background-image: url(./assets/img/register_bg_2.png); background-size: 100%; background-repeat: no-repeat;"
                >
            </div>
            <div class="container mx-auto px-4 h-full">
                <div class="flex content-center items-center justify-center h-full">
                    <div class="w-full lg:w-4/12 px-4">
                        <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300 border-0" >
                            <div class="kotak_login">
                                <div class="ro unded-t mb-0 px-6 py-6 kotak_login" >
                                    <div class="relative w-full mb-3">
                                        <form action="{{ route('login') }}" method="post"> 
                                            @csrf
                                            <label class="block uppercase text-gray-700 text-xs font-bold mb-2 " for="grid-password"  >Username</label>
                                            <input 
                                                type="email" 
                                                name="email" 
                                                class="border-0 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full from_login"
                                                placeholder="Username .." 
                                                required="required">

                                            <p><label>Password</label></p>
                                            <input 
                                                type="password"
                                                name="password" 
                                                class="border-0 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full from_login"
                                                placeholder="Password .." 
                                                required="required">
                                            <div class="text-center mt-6">
                                                <input 
                                                    type="submit" 
                                                    class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full tombol_login" 
                                                    value="LOGIN"
                                                    style="transition: all 0.15s ease 0s;"
                                                    >
                                            </div>

                                            <br/>
                                            <br/>
                                        </form>
        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
    </main>

</body>
</html>
