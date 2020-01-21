<template>
    <div>
        <p>
            <label>
                <input type="text" v-model="name">
            </label>
        </p>
        Bonjour {{ name }} !
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },

        data() {
            return {
                'name' : 'Romain'
            }
        }
    }
</script>
