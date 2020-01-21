<template>
    <div class="flex">
        <label>
            <input :type="show ? 'text' : 'password'" class="border rounded-1 px-2 h-8">
        </label>
        <button type="button" class="border-r border-t border-b rounded-r px-2 h-8 flex justify-center items-center" @click="show = ! show">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="h-3 w-3 fill-current text-grey-darker" v-show="! show">
                <path d="M.2 10a11 11 0 0 1 19.6 0A11 11 0 0 1 .2 10zm9.8 4a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm0-2a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="h-3 w-3 fill-current text-grey-darker" v-show="show">
                <path d="M12.81 4.36l-1.77 1.78a4 4 0 0 0-4.9 4.9l-2.76 2.75C2.06 12.79.96 11.49.2 10a11 11 0 0 1 12.6-5.64zm3.8 1.85c1.33 1 2.43 2.3 3.2 3.79a11 11 0 0 1-12.62 5.64l1.77-1.78a4 4 0 0 0 4.9-4.9l2.76-2.75zm-.25-3.99l1.42 1.42L3.64 17.78l-1.42-1.42L16.36 2.22z"/></svg>
        </button>
    </div>
</template>

<script>
    export default {
        name: "PasswordInput",
        data() {
            return {
                show: false,
            }
        },
    }
</script>
