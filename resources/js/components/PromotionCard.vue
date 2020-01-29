<template>
    <div>
        <div v-for="promotion in promotions">
            <div class="max-w-sm w-full lg:max-w-full lg:flex">
                <img class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" v-bind:src="promotion.image">
                </img>
                <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                    <div class="mb-8">
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">DU {{promotion.startDate}} AU {{promotion.endDate}}</span>
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">Période d'envoi {{promotion.sendingPeriod}}</span>
                        <div class="text-gray-900 font-bold text-xl mb-2">{{promotion.title}}</div>
                        <p class="text-gray-700 text-base">{{promotion.description}}</p><br>
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">{{promotion.limit}} UTILISATION</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "PromotionCard",
        props: [
            'promotions',
        ]
    }
</script>

<style scoped>

</style>
