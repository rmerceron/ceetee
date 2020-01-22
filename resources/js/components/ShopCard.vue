<template>
    <div>
        <div v-for="shop in shops">
            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <img class="w-full" v-bind:src="shop.image" alt="Image trade">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{shop.corporateName}}</div>
                    <p class="text-gray-700 text-base">
                        {{shop.description}}
                    </p>
                </div>
                <div class="px-6 py-4">
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">{{shop.category.libelle}}</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">{{shop.address.number}} {{shop.address.libelle}} {{shop.address.additionalAddress}}, {{shop.address.city}} {{shop.address.postalCode}}</span>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "ShopCard",
        props: [
            'shops',
        ],
        methods: {
            recoverShops() {
                axios.get('/')
            }
        },
        data() {
            return {
            }
        }
    }
</script>

<style scoped>

</style>
