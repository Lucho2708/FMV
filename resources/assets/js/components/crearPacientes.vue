<template>
    <div class="body">
        <div class="row clearfix">
            <form-wizard v-bind:title="title" v-bind:subtitle="subtitle">
              <tab-content title="Información personal">
                My first tab content
              </tab-content>
              <tab-content title="Información acudiente">
                  My second tab content
               </tab-content>
               <tab-content title="información adicional">
                 Yuhuuu! This seems pretty damn simple
               </tab-content>
            </form-wizard>
            
        </div>
    </div>
</template>
<script>
    import {FormWizard, TabContent} from 'vue-form-wizard'
    import 'vue-form-wizard/dist/vue-form-wizard.min.css'

    export default{
        components: {
            FormWizard,
            TabContent
        },
        props: {
            title:{
                type: String,
                default: 'Crear Usuario'
            },
            subtitle: {
                type: String,
                default: 'Registrar pacientes nuevos al sistema'
            }
        }

    };



</script>