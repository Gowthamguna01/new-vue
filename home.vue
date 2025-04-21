<template >
    <h1 class="text-blue-500 font-semibold py-2">Home page</h1>

    <div>
        <button @click="increment" class="bg-blue-400 px-4 rounded mx-6 my-4">count is: {{ count }}</button>
    </div>

<!--    <div class="px-4 mx-6">&ndash;&gt;-->
<!--        <div v-html="message"></div>-->

<!--        <div :id="dynamicId">v-bind: name shorthand</div>-->

<!--        <div v-bind="object" :[titleAttr]="titleValue"></div>-->

<!--        <div v-on:click="answer()">js exp: {{ number + 5 }}</div>-->

<!--        <div @[eventmouse]="changeTitle()">js exp: {{ message ? 'yes' : 'no' }}</div>-->

<!--        <button v-on:click="touch()" class="bg-red-400 px-4 rounded mx-6 my-4">Click</button><br>-->

<!--        <button @click="awesome = !awesome" class="bg-green-400 rounded-md px-4">Toggle</button>-->

<!--        <h1 v-if="awesome">vue is awesome!</h1>-->
<!--        <h1 v-else>OH NO!</h1>-->



<!--    </div>-->

</template>

<script setup>

    import {ref,} from 'vue'
    const count = ref(0)
    function increment() {
        count.value++
    }

    const message = '<h1>hello</h1>';
    const dynamicId = 'myid';

    const number = 10;

    const object = {
        id: dynamicId,
        class: 'footer'
    }

    const titleAttr= 'title';
    const titleValue = 'this is value for title';

    function changeTitle() {
        alert("True message add mouseover");
    }



</script>

