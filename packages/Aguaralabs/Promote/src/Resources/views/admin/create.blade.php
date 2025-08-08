<x-admin::layouts>
    <x-slot:title>Agregar Nueva Promoción</x-slot:title>

    <x-admin::form method="POST" action="{{ route('admin.promote.store') }}" enctype="multipart/form-data">
        <div class="grid gap-2.5"></div>

        <div class="mt-6 flex items-center justify-between gap-4 max-md:flex-wrap">
            <p class="text-xl font-bold text-gray-800 dark:text-white">Agregar Nueva Promoción</p>

            <div class="flex items-center gap-x-2.5">
                <a href="{{ route('admin.promote.index') }}" class="transparent-button hover:bg-gray-200 dark:text-white dark:hover:bg-gray-800">
                    Volver
                </a>
                <button type="submit" class="primary-button">
                    Guardar
                </button>
            </div>
        </div>

        <div class="mt-3.5 flex gap-2.5 max-xl:flex-wrap">
            <div class="flex flex-1 flex-col gap-2 max-xl:flex-auto">
                <!-- Nombre -->
                <div class="box-shadow rounded bg-white p-4 dark:bg-gray-900">
                    <x-admin::form.control-group>
                        <x-admin::form.control-group.label class="required">Nombre</x-admin::form.control-group.label>

                        <v-field name="name" rules="required" v-slot="{ field, errors }">
                            <input
                                type="text"
                                v-bind="field"
                                name="name"
                                class="w-full border p-2 rounded dark:bg-gray-900 dark:text-white"
                                placeholder="Nombre de la promoción"
                            />
                        </v-field>

                        <x-admin::form.control-group.error control-name="name" />
                    </x-admin::form.control-group>
                </div>

                <!-- Imagen -->
                <div class="box-shadow rounded bg-white p-4 dark:bg-gray-900">
                    <x-admin::form.control-group>
                        <x-admin::form.control-group.label>Imagen de la Promoción</x-admin::form.control-group.label>
                        <x-admin::media.images name="header_banner" allow-multiple="false" show-placeholders="true" />
                        <x-admin::form.control-group.error control-name='images.files[0]'/>
                    </x-admin::form.control-group>
                </div>

                <!-- Selector de Reglas -->
                <div class="box-shadow rounded bg-white p-4 dark:bg-gray-900">
                    <x-admin::form.control-group>
                        <x-admin::form.control-group.label class="required">Reglas de Catálogo</x-admin::form.control-group.label>
                        <v-catalog-rules></v-catalog-rules>
                        <x-admin::form.control-group.error control-name="rules" />
                    </x-admin::form.control-group>
                </div>
            </div>
        </div>
    </x-admin::form>


    @pushOnce('scripts')
        <script type="text/x-template" id="v-catalog-rules-template">
            <div class="catalog-rules-selector">
                <div>
                    <input type="text" v-model="searchTerm" class="w-full border border-gray-600 rounded p-2 dark:bg-gray-900 dark:text-white" placeholder="Buscar">
                    <div v-bind="getSearchTerm"></div>
                </div>
            </div>
        </script>

        <script type="module">
            app.component('v-catalog-rules', {
                template: '#v-catalog-rules-template',

                data() {
                    return {
                        searchTerm: ""
                    }
                },

                computed: {
                    getSearchTerm: function() {
                        return this.searchTerm;
                    }
                },
                mounted() {
                    console.log("This component has been loaded");
                }
            });
        </script>
    @endpushonce
</x-admin::layouts>
