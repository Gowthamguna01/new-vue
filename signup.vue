<script setup>
    import { useForm } from "@inertiajs/vue3";
    import { Head } from '@inertiajs/vue3'

    defineProps({ errors: Object })

    const form = useForm({
        name: '',
        email: '',
        password: ''
    })

    function signup(){
        form.post('/signup')
    }
</script>

<template>

    <Head title="Signup form"/>

        <div class="flex justify-center my-8 p-2">

            <form @submit.prevent="signup" class="bg-blue-300 p-8 rounded-xl  w-full max-w-md">

                <label for="name">Name</label>
                <input id="name" v-model="form.name" type="text" placeholder="username" class="w-full p-2 rounded"/> <br><br>

                <label for="email">Email</label>
                <input id="email" v-model="form.email" type="email" placeholder="Enter Email" class="w-full p-2 rounded"/> <br><br>
                <div v-if="form.errors.email" class="text-red-600 text-sm mt-1">>{{ form.errors.email }}</div>

                <label for="password">Password</label>
                <input id="password" v-model="form.password" type="password" placeholder="Enter password" class="w-full p-2 rounded"/> <br><br>

                <div class="flex justify-center">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                        Signup
                    </button>
                </div>

            </form>

        </div>
</template>


