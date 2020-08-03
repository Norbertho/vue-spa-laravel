@extends('layouts.app')
@section('content')
    <div class="flex bg-gray-100 border-b border-gray-300 py-4">
        <div class="container mx-auto flex justify-between">
            <div class="flex">
                <router-link class="mr-4" to='/' exact>Home</router-link>
                <router-link to='/about'>About</router-link>
            </div>
            <div class="flax">
                <router-link class="mr-4" to='/login' exact>Login</router-link>
                <router-link to='/register'>Register</router-link>
            </div>
        </div>
    </div>
    <div class="container mx-auto py-2">
        <router-view></router-view>
    </div>
    
@endsection