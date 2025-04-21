<script setup>

    defineProps({ user: Object })

</script>

<template>
    <main>
        <div class="flex justify-center my-8 p-2">

            <div class="bg-blue-300 p-8 rounded-xl w-full max-w-md">

                <h1 class="text-white font-extrabold flex justify-center">DASHBOARD</h1>

                <div class="">
                    <p class="w-full p-4 rounded"> <b>Name:</b> {{ user.name }} </p>
                    <p class="w-full p-4 rounded"> <b>Email:</b> {{ user.email }} </p>
                </div>
            </div>

        </div>
    </main>
</template>
