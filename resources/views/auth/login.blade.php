@extends('layouts.app')

@section('content')
    <section class="absolute w-full h-full">
        <div
            class="absolute top-0 w-full h-full bg-gray-900"
            style="background-image: url('{{asset('/images/register_bg_2.png')}}'); background-size: 100%; background-repeat: no-repeat;"
        ></div>
        <div class="container mx-auto px-4 h-full">
            <div class="flex content-center items-center justify-center h-full">
                <div class="w-full lg:w-4/12 px-4">
                    <div
                        class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300 border-0"
                    >
                        <div class="rounded-t mb-0 px-6 py-6">
                            <div class="block mb-3">
                                <svg class="fill-current text-gray-900 w-16 m-auto" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 24 24">
                                    <path
                                        d="M3.9 4.2c-.5 0-.8.3-.8.8s.4.8.8.8c.5 0 .8-.4.8-.8.1-.5-.3-.8-.8-.8zM3.3 18.6c0 1.4-.2 2.1-1.5 2.1-.3 0-.7 0-.9-.1l-.3 1.1c.3.1.7.2 1.1.2 1.9 0 2.7-1.2 2.7-3.2V8.1H3.3v10.5zM9.4 17.5c1.4 0 2.3-.4 3-1.2.8-1 1.1-2.1 1.1-3.8 0-1.4-.2-2.7-1-3.5-.6-.7-1.5-1.1-2.9-1.1s-2.3.4-3 1.2c-.8 1-1.1 2.2-1.1 3.8 0 1.5.2 2.6 1 3.5.6.7 1.5 1.1 2.9 1.1zM7.5 9.7c.3-.4.9-.8 2-.8 1 0 1.6.3 1.9.7.5.6.7 1.7.7 2.9s-.2 2.4-.7 3.1c-.3.4-.9.8-2 .8-1 0-1.6-.3-1.9-.7-.5-.6-.7-1.6-.7-2.9 0-1.2.2-2.4.7-3.1zM15 14.4c0 2.1.4 3.1 2.5 3.1.6 0 1.3-.1 1.8-.2l-.1-1c-.5.1-1 .2-1.5.2-1.4 0-1.5-.6-1.5-2.1v-5h3V8.3h-3v-3l-1.2.2v2.7h-1.8v1.1H15v5.1zM6 18h17v1H6z"/>
                                </svg>
                            </div>
                            <div class="text-center mb-3">
                                <h6 class="text-gray-600 text-sm font-bold">
                                    Sign in with
                                </h6>
                            </div>
                            <div class="btn-wrapper text-center">
                                <button
                                    class="bg-white active:bg-gray-100 text-gray-800 font-normal px-4 py-2 rounded outline-none focus:outline-none mr-2 mb-1 uppercase shadow hover:shadow-md inline-flex items-center font-bold text-xs"
                                    type="button"
                                    style="transition: all 0.15s ease 0s;"
                                >
                                    <svg style="margin-right:4px" width="20" height="20" viewBox="0 0 36 36"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17.999 2C9.164 2 2 9.163 2 18c0 7.07 4.584 13.066 10.942 15.182.8.147 1.092-.347 1.092-.771 0-.38-.013-1.386-.021-2.721-4.45.966-5.39-2.145-5.39-2.145-.728-1.849-1.777-2.34-1.777-2.34-1.452-.993.11-.973.11-.973 1.606.113 2.451 1.649 2.451 1.649 1.427 2.445 3.745 1.738 4.657 1.329.145-1.033.559-1.739 1.015-2.138-3.552-.404-7.288-1.777-7.288-7.908 0-1.747.624-3.176 1.647-4.294-.165-.404-.714-2.032.158-4.234 0 0 1.342-.43 4.399 1.64A15.325 15.325 0 0118 9.737c1.36.007 2.728.184 4.006.54 3.055-2.071 4.395-1.641 4.395-1.641.874 2.202.325 3.83.16 4.234 1.026 1.118 1.645 2.547 1.645 4.294 0 6.146-3.741 7.499-7.305 7.895.574.494 1.085 1.47 1.085 2.962 0 2.14-.02 3.865-.02 4.39 0 .428.29.926 1.1.77C29.42 31.06 34 25.068 34 18 34 9.162 26.836 2 17.999 2"
                                            fill="#182359" fill-rule="evenodd"/>
                                    </svg>
                                    Github
                                </button
                                >
                                <button
                                    class="bg-white active:bg-gray-100 text-gray-800 font-normal px-4 py-2 rounded outline-none focus:outline-none mr-1 mb-1 uppercase shadow hover:shadow-md inline-flex items-center font-bold text-xs"
                                    type="button"
                                    style="transition: all 0.15s ease 0s;"
                                >
                                    <svg style="margin-right:4px" width="20" height="20" viewBox="0 0 36 36"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g fill="none" fill-rule="evenodd">
                                            <path
                                                d="M34.437 18.602c0-1.15-.106-2.258-.301-3.32H18.549v6.28h8.907c-.384 2.029-1.55 3.748-3.302 4.9v4.072h5.348c3.13-2.826 4.935-6.988 4.935-11.932z"
                                                fill="#4285F4"/>
                                            <path
                                                d="M18.55 34.467c4.468 0 8.214-1.453 10.952-3.933l-5.348-4.073c-1.482.974-3.378 1.55-5.605 1.55-4.31 0-7.958-2.855-9.26-6.693H3.76v4.206c2.723 5.306 8.32 8.943 14.79 8.943z"
                                                fill="#34A853"/>
                                            <path
                                                d="M9.29 21.318a9.591 9.591 0 01-.52-3.084c0-1.07.188-2.11.52-3.085v-4.206H3.76a15.98 15.98 0 000 14.581l5.53-4.206z"
                                                fill="#FBBC05"/>
                                            <path
                                                d="M18.55 8.456c2.43 0 4.61.82 6.326 2.428l4.747-4.656C26.756 3.608 23.01 2 18.549 2 12.08 2 6.483 5.638 3.76 10.943l5.53 4.206c1.3-3.837 4.95-6.693 9.26-6.693z"
                                                fill="#EA4335"/>
                                        </g>
                                    </svg>
                                    Google
                                </button>
                            </div>
                            <hr class="mt-6 border-b-1 border-gray-400"/>
                        </div>
                        <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                            <div class="text-gray-500 text-center mb-3 font-bold">
                                <small>Or sign in with credentials</small>
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="relative w-full mb-3">
                                    <label
                                        class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                        for="grid-password"
                                    >Email</label
                                    ><input
                                        type="email"
                                        class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                                        name="email" value="{{ old('email') }}" autocomplete="email" autofocus
                                        placeholder="your@email.com"
                                        style="transition: all 0.15s ease 0s;"
                                        required
                                    />
                                    @error('email')
                                    <span class="text-red-700 text-sm pt-1"
                                          role="alert"> <strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <div class="relative w-full mb-3">
                                    <label
                                        class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                        for="password"
                                    >{{ __('Password') }}</label
                                    ><input
                                        type="password"
                                        class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                                        name="password" autocomplete="current-password" autofocus placeholder="Password"
                                        style="transition: all 0.15s ease 0s;"
                                        required
                                    />
                                    @error('password')
                                    <span class="text-red-700 text-sm pt-1"
                                          role="alert"> <strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <div>
                                    <label class="inline-flex items-center cursor-pointer" for="remember">
                                        <input
                                            id="remember"
                                            type="checkbox"
                                            class="form-checkbox text-blue-800 ml-1 w-5 h-5"
                                            style="transition: all 0.15s ease 0s;"
                                            {{ old('remember') ? 'checked' : '' }}
                                            name="remember"
                                        /><span class="ml-2 text-sm font-semibold text-gray-700"
                                        >{{ __('Remember Me') }}</span
                                        ></label
                                    >
                                </div>
                                <div class="text-center mt-6">
                                    <button
                                        class="bg-blue-900 text-white active:bg-blue-700 hover:bg-blue-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full"
                                        type="submit"
                                        style="transition: all 0.15s ease 0s;"
                                    >
                                        {{__('Sign In')}}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="relative flex flex-wrap mt-6">
                        <div class="w-1/2">
                            <a href="{{ route('password.request') }}" class="text-white text-sm font-bold"
                            ><small>{{ __('Forgot Your Password?') }}</small></a
                            >
                        </div>
                        <div class="w-1/2 text-right">
                            <a href="{{ route('register') }}" class="text-white text-sm font-bold"
                            ><small>{{__('Create new account')}}</small></a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="absolute w-full bottom-0 bg-gray-900 pb-6">
            <div class="container mx-auto px-4">
                <hr class="mb-6 border-b-1 border-gray-700"/>
                <div
                    class="flex flex-wrap items-center md:justify-between justify-center"
                >
                    <div class="w-full md:w-full px-4">
                        <div class="text-sm text-white font-semibold py-1 text-center">
                            Copyright © 2020
                            <a
                                href="https://www.creative-tim.com"
                                class="text-white hover:text-gray-400 text-sm font-semibold py-1"
                            >Jot</a
                            >
                        </div>
                    </div>
                    {{--<div class="w-full md:w-8/12 px-4">
                        <ul
                            class="flex flex-wrap list-none md:justify-end  justify-center"
                        >
                            <li>
                                <a
                                    href="https://www.creative-tim.com"
                                    class="text-white hover:text-gray-400 text-sm font-semibold block py-1 px-3"
                                >Creative Tim</a
                                >
                            </li>
                            <li>
                                <a
                                    href="https://www.creative-tim.com/presentation"
                                    class="text-white hover:text-gray-400 text-sm font-semibold block py-1 px-3"
                                >About Us</a
                                >
                            </li>
                            <li>
                                <a
                                    href="http://blog.creative-tim.com"
                                    class="text-white hover:text-gray-400 text-sm font-semibold block py-1 px-3"
                                >Blog</a
                                >
                            </li>
                            <li>
                                <a
                                    href="https://github.com/creativetimofficial/argon-design-system/blob/master/LICENSE.md"
                                    class="text-white hover:text-gray-400 text-sm font-semibold block py-1 px-3"
                                >MIT License</a
                                >
                            </li>
                        </ul>
                    </div>--}}
                </div>
            </div>
        </footer>
    </section>
    {{--<div class="mx-auto h-full flex justify-center items-center bg-gray-300">
        <div class="w-96 bg-blue-900 rounded-lg shadow-xl p-6">
            <svg class="fill-current text-white w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M3.9 4.2c-.5 0-.8.3-.8.8s.4.8.8.8c.5 0 .8-.4.8-.8.1-.5-.3-.8-.8-.8zM3.3 18.6c0 1.4-.2 2.1-1.5 2.1-.3 0-.7 0-.9-.1l-.3 1.1c.3.1.7.2 1.1.2 1.9 0 2.7-1.2 2.7-3.2V8.1H3.3v10.5zM9.4 17.5c1.4 0 2.3-.4 3-1.2.8-1 1.1-2.1 1.1-3.8 0-1.4-.2-2.7-1-3.5-.6-.7-1.5-1.1-2.9-1.1s-2.3.4-3 1.2c-.8 1-1.1 2.2-1.1 3.8 0 1.5.2 2.6 1 3.5.6.7 1.5 1.1 2.9 1.1zM7.5 9.7c.3-.4.9-.8 2-.8 1 0 1.6.3 1.9.7.5.6.7 1.7.7 2.9s-.2 2.4-.7 3.1c-.3.4-.9.8-2 .8-1 0-1.6-.3-1.9-.7-.5-.6-.7-1.6-.7-2.9 0-1.2.2-2.4.7-3.1zM15 14.4c0 2.1.4 3.1 2.5 3.1.6 0 1.3-.1 1.8-.2l-.1-1c-.5.1-1 .2-1.5.2-1.4 0-1.5-.6-1.5-2.1v-5h3V8.3h-3v-3l-1.2.2v2.7h-1.8v1.1H15v5.1zM6 18h17v1H6z"/>
            </svg>
            <h1 class="text-white text-3xl pt-8">Welcome Back</h1>
            <h2 class="text-blue-300">Enter your credentials below</h2>
            <form method="POST" action="{{ route('login') }}" class="pt-8">
                @csrf

                <div class="relative">
                    <label for="email" class="uppercase text-blue-500 text-xs font-bold absolute pl-3 pt-3" >{{ __('E-Mail') }}</label>
                    <div>
                        <input id="email" type="email" class="pt-8 w-full rounded p-3 bg-blue-800 text-gray-200 outline-none focus:bg-blue-700" name="email" value="{{ old('email') }}" autocomplete="email" autofocus placeholder="your@email.com">
                        @error('email')
                        <span class="text-red-700 text-sm pt-1" role="alert"> <strong>{{ $message }}</strong> </span>
                        @enderror
                    </div>
                </div>

                <div class="relative pt-4">
                    <label for="password" class="uppercase text-blue-500 text-xs font-bold absolute pl-3 pt-3">{{ __('Password') }}</label>

                        <input id="password" type="password" class="pt-8 w-full rounded p-3 bg-blue-800 text-gray-200 outline-none focus:bg-blue-700" name="password" autocomplete="current-password" placeholder="Password">

                        @error('password')
                        <span class="text-red-700 text-sm pt-1" role="alert"><strong>{{ $message }}</strong> </span>
                        @enderror
                </div>

                <div class="pt-3">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="text-white" for="remember">{{ __('Remember Me') }} </label>
                </div>
                <div class="pt-8">
                    <button type="submit" class="w-full bg-gray-400 py-3 px-3 shadow-xl text-left uppercase rounded text-blue-800 font-bold">
                        {{ __('Login') }}
                    </button>
                </div>
                <div class="flex justify-between pt-8 text-white text-sm font-bold">
                    <a class="" href="{{ route('password.request') }}">  {{ __('Forgot Your Password?') }}   </a>
                    <a class="" href="{{ route('register') }}">   {{ __('Register') }}  </a>
                </div>
            </form>
        </div>
    </div>--}}
@endsection
