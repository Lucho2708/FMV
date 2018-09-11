<template >
    <div class="body">
        <div class="row clearfix">
            <form-wizard @on-complete="onComplete" color="#3498db" error-color="#ff4949" v-bind:title="title" v-bind:subtitle="subtitle" v-bind:nextButtonText="nextButtonText" v-bind:backButtonText="backButtonText" v-bind:finishButtonText = "finishButtonText">
              <tab-content title="Información del paciente" icon="ti-user" :before-change="validateFirstStep">
                <div class="row clearfix">
                  <div class="col-sm-3">
                    <label>Nombres</label>
                      <div class="input-group">
                        <div v-validate :class="{'form-line': true , 'form-line error':errors.has('nombres')}">
                            <input v-validate="'required'" type="input" name="nombres" class="form-control error">
                        </div>
                        <label class="error">{{ errors.first('nombres') }}</label>
                      </div>
                  </div>
                  <div class="col-sm-3">
                    <label>Apellidos</label>
                      <div class="input-group">
                        <div v-validate :class="{'form-line': true , 'form-line error':errors.has('apellidos')}">
                            <input  v-validate="'required'" type="input" name="apellidos" class="form-control">
                        </div>
                        <label class="error">{{ errors.first('apellidos') }}</label>
                      </div>
                  </div>
                  <div class="col-sm-3">
                    <label>Tipo documento</label>
                      <div class="input-group" >
                        <div  class="form-line">
                            <input type="input" name="" class="form-control">
                        </div>
                      </div>
                  </div>
                  <div class="col-sm-3">
                    <label>Numero de documento</label>
                      <div class="input-group" >
                        <div  class="form-line">
                            <input type="input" name="" class="form-control">
                        </div>
                      </div>
                  </div>
                </div>
              </tab-content>
              <tab-content title="Información del acudiente" icon="ti-info-alt">
                  
               </tab-content>
               <tab-content title="información ">
                 
               </tab-content>
            </form-wizard>
        </div>
    </div>
</template>
<script>
    import {FormWizard, TabContent} from 'vue-form-wizard'
    import 'vue-form-wizard/dist/vue-form-wizard.min.css'
    import VeeValidate from 'vee-validate';

    
    const VueValidationEs = require('vee-validate/dist/locale/es');
    Vue.use(VeeValidate, {
        locale: 'es',
        dictionary: {
          es: VueValidationEs
        }
    });

    export default{
        components: {
          FormWizard,
          TabContent
        },
        props: {
          title:{
              type: String,
              default: 'Registro'
          },
          subtitle: {
              type: String,
              default: 'Paciente'
          },
          nextButtonText: {
            type: String,
            default: 'Siguiente'
          },
          backButtonText: {
            type: String,
            default: 'Anterior'
          },
          finishButtonText: {
            type: String,
            default: 'Finalizar'
          }
        },
        data(){
          
        },
        methods: {
         onComplete: function() {
           alert('Yay. Done!');
         },
         validateFirstStep() {
           return new Promise((resolve, reject) => {
             this.$refs.ruleForm.validate((valid) => {
               resolve(valid);
             });
           })

         }
       }
    };



</script>