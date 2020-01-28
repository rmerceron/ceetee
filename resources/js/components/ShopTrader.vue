<template>
    <div>
        <div v-for="usershop in usershops">
            <div class="max-w-sm w-full lg:max-w-full lg:flex">
                <img class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" v-bind:src="usershop.shop.image">
                </img>
                <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                    <div class="mb-8">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full float-right" onclick="window.location.href = 'http://127.0.0.1:8000/promotion';">
                            Voir mes promotions
                        </button><br>
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">{{usershop.shop.category.libelle}}</span>
                        <div class="text-gray-900 font-bold text-xl mb-2">{{usershop.shop.corporateName}}</div>
                        <p class="text-gray-700 text-base">{{usershop.shop.description}}</p>
                    </div>
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 rounded-full mr-4" viewBox="0 0 20 20"><path d="M10 20S3 10.87 3 7a7 7 0 1 1 14 0c0 3.87-7 13-7 13zm0-11a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/></svg>
                        <div class="text-sm">
                            <p class="text-gray-900 leading-none">{{usershop.shop.address.number}} {{usershop.shop.address.libelle}} {{usershop.shop.address.additionalAddress}}, {{usershop.shop.address.city}} {{usershop.shop.address.postalCode}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "ShopTrader",
        props: [
            'usershops',

        ],
    }
</script>

<style scoped>

</style>
