<x-layout>

    <x-splade-form class="w-4/12 justify-center mx-auto mt-20 bg-white px-5 py-3 rounded ">
        <h1 class="mb-3 font-semibold text-2xl">Splade Login</h1>
        <x-splade-input name="name" label="name" />
        <x-splade-input name="email" label="email" />
        <x-splade-input name="password" label="password" />
        <x-splade-select name="country_code" label="Countries" :options="1" />
        <x-splade-checkbox name="admin" label="admin" />
        <x-splade-checkbox name="admin" label="user" />
        <x-splade-checkbox name="admin" label="seller" />
        <x-splade-textarea name="description" placeholder="description" label="description" />
        <x-splade-button class="mt-4 font-semibold">
        </x-splade-button>
    </x-splade-form>
</x-layout>
