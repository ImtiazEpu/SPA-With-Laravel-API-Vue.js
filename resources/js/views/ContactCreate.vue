<template>
    <div>
        <form>
            <InputField name="name" label="Contact Name" placeholder="Full Name"/>
            <InputField name="email" label="Contact Email" placeholder="your@domain.com"/>
            <InputField name="phone" label="Contact Phone" placeholder="+880-xxx-xxx-xxxx"/>
            <InputField name="birthday" label="Birthday" placeholder="MM/DD/YYYY"/>
            <InputField name="company" label="Company" placeholder="Company"/>

            <div class="flex justify-end">
                <button class="border px-4 py-2 text-red-700 rounded mr-5 shadow hover:border-red-700">Cancel</button>
                <button class="text-white bg-blue-500 rounded px-4 py-2 shadow hover:bg-blue-400">Add new Contact
                </button>
            </div>
        </form>
    </div>
</template>

<script>
    import InputField from "../components/InputField";

    export default {
        name: "ContactCreate",

        components: {
            InputField
        }
    }
</script>

<style scoped>

</style>
