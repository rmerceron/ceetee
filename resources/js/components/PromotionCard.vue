<template>
    <div>
        <div v-for="promotion in promotions">
            <div class="bg-gray-200 w-full text-xl md:text-2xl text-gray-800 leading-normal rounded-t">
                <div class="flex h-full bg-white rounded overflow-hidden shadow-lg">
                    <div class="w-full md:w-2/3 rounded-t">
                        <img v-bind:src="promotion.image" class="h-full w-full shadow">
                    </div>

                    <div class="w-full md:w-1/3 flex flex-col flex-grow flex-shrink">
                        <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg"><br>
                            <p class="w-full text-gray-600 text-xs md:text-sm pt-6 px-6">{{promotion.type.libelle}}</p>
                            <p class="w-full text-gray-600 text-xs md:text-sm pt-6 px-6">DU {{promotion.startDate}} AU {{promotion.endDate}}</p>
                            <div class="w-full font-bold text-xl text-gray-900 px-6">{{promotion.title}}</div>
                            <p class="text-gray-800 font-serif text-base px-6 mb-5">{{promotion.description}}<br><br></p>
                            <p class="text-gray-600 text-xs md:text-sm pt-6 px-6">{{promotion.limit}} UTILISATION</p>
                        </div>

                        <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                            <div class="flex items-center justify-between">
                                <img :src="'https://api.qrserver.com/v1/create-qr-code/?data='+ promotion.qrCode +'&amp;size=100x100'" alt="" title="" />
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <br>
        </div>
    </div>
</template>

<script>
    export default {
        name: "PromotionCard",
        props: [
            'promotions',
        ],
    }
</script>

<style scoped>

</style>
