<template>
    <div class="relative pb-4">
        <label :for="name"
               class="uppercase text-xs pt-2 font-bold text-blue-600 absolute tracking-wide">{{label}}</label>
        <input :id="name" type="text"
               class="pt-8 text-gray-900 w-full border-b pb-2 focus:outline-none focus:border-blue-400 xl:focus:placeholder-transparent"
               :placeholder="placeholder" v-model="value" @input="updateField()"/>
    </div>
</template>

<script>
    export default {
        name: "InputField",

        props: [
            'name', 'label', 'placeholder'
        ],
        data:function(){
            return{
                value:''
            }
        },
        methods:{
            updateField:function () {
                this.$emit('update:field', this.value)
            }
        }
    }
</script>

<style scoped>

</style>
