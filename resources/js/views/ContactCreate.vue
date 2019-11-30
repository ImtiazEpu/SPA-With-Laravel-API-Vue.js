<template>
    <div>
        <form>
            <div class="relative pb-4">
                <label for="name" class="uppercase text-xs pt-2 font-bold text-blue-500 absolute tracking-wide">Contact Name</label>
                <input id="name" type="text" class="pt-8 text-gray-900 w-full border-b pb-2 focus:outline-none focus:border-blue-400 xl:focus:placeholder-transparent" placeholder="Contact Name">
            </div>
            <div class="flex justify-end">
                <button class="border px-4 py-2 text-red-700 rounded mr-5 shadow hover:border-red-700">Cancel</button>
                <button class="text-white bg-blue-500 rounded px-4 py-2 shadow hover:bg-blue-400" >Add new Contact</button>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        name: "ContactCreate"
    }
</script>

<style scoped>

</style>
