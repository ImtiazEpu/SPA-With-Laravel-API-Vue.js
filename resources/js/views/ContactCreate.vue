<template>
    <div>
        <form @submit.prevent="submitForm">
            <InputField name="name" label="Contact Name" placeholder="Full Name" @update:field="form.name=$event"/>
            <InputField name="email" label="Contact Email" placeholder="your@domain.com"
                        @update:field="form.email=$event"/>
            <InputField name="phone" label="Contact Phone" placeholder="+880-xxx-xxx-xxxx"
                        @update:field="form.phone=$event"/>
            <InputField name="birthday" label="Birthday" placeholder="MM/DD/YYYY" @update:field="form.birthday=$event"/>
            <InputField name="company" label="Company" placeholder="Company" @update:field="form.company=$event"/>

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
        },

        data: function () {
            return {
                form: {
                    'name': '',
                    'email': '',
                    'phone': '',
                    'birthday': '',
                    'company': '',
                }
            }
        },

        methods: {
            submitForm: function () {
                axios.post('/api/contacts', this.form)
                    .then(response => {

                    })
                    .catch(errors => {

                    });
            }
        }

    }
</script>

<style scoped>

</style>
