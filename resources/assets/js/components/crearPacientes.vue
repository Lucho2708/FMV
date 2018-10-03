<template >
    <div class="body">
        <div class="row clearfix">
            <form-wizard @on-complete="onComplete" color="#3498db" error-color="#ff4949" v-bind:title="title" v-bind:subtitle="subtitle" v-bind:nextButtonText="nextButtonText" v-bind:backButtonText="backButtonText" v-bind:finishButtonText = "finishButtonText">
              <tab-content title="Información del paciente" icon="ti-user" :before-change = "beforeTabSwitch">
                <div class="row clearfix">
                  <div class="col-sm-3">
                    <label>Nombres</label>
                      <div class="input-group">
                        <div v-validate :class="{'form-line': true , 'form-line error':errors.has('PNombres')}">
                            <input v-validate="'required'" type="input-group" data-vv-as="nombre" data-vv-name="PNombres" class="form-control error">
                        </div>
                        <label class="error">{{ errors.first('PNombres') }}</label>
                      </div>
                  </div>
                  <div class="col-sm-3">
                    <label>Apellidos</label>
                      <div class="input-group">
                        <div v-validate :class="{'form-line': true , 'form-line error':errors.has('PApellidos')}">
                            <input  v-validate="'required'" type="input" data-vv-as="apellido" data-vv-name="PApellidos" class="form-control">
                        </div>
                        <label class="error">{{ errors.first('PApellidos') }}</label>
                      </div>
                  </div>
                  <div class="col-sm-3">
                    <label>Tipo de documento</label>
                    <div class="input-group">
                    <div v-validate :class="{'form-line':true, 'form-line error':errors.has('PTipoDocumento')}">
                      <select v-validate="'required'" data-vv-as="tipo de documento" data-vv-name="PTipoDocumento" class="form-control" required>
                        <option value="" selected disabled>-- Seleccione --</option>
                        <option value="CC">CC</option>
                        <option value="TI">TI</option>
                        <option value="CE">CE</option>
                        <option value="RC">RC</option>
                      </select>
                    </div>

                    
                      <label class="error">{{ errors.first('PTipoDocumento') }}</label>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <label>Número de documento</label>
                    <div class="input-group">
                      <div v-validate :class="{'form-line':true, 'form-line error':errors.has('Pdocumento')}">
                        <input v-validate="'required'" type="number" class="form-control" data-vv-as="número de documento" data-vv-name="Pdocumento">
                      </div>
                      <label class="error">{{ errors.first('Pdocumento') }}</label>
                    </div>
                  </div>
                </div>

                <div class="row clearfix">
                  <div class="col-sm-3">
                    <label>Ciudad de nacimiento</label>
                    <div class="input-group">
                    <div v-validate :class="{'form-line':true, 'form-line error':errors.has('PUbicacion')}">
                        <select  v-validate="'required'" data-vv-as="ubicacion" data-vv-name="PUbicacion" class="form-control" required>
                          <option value="" selected disabled>-- Seleccione --</option>
                          <option v-for="data in ubicaciones">{{ data.ciudad }}</option> 
                        </select>
                    </div>
                      <label class="error">{{ errors.first('PUbicacion') }}</label>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <label>Fecha de nacimiento</label>
                      <div class="input-group">
                        <div v-validate :class="{'form-line': true , 'form-line error':errors.has('PFechaNacimiento')}">
                            <input  v-validate="'required'" type="date" data-vv-as="fecha de nacimiento" data-vv-name="PFechaNacimiento" class="form-control">
                        </div>
                        <label class="error">{{ errors.first('PFechaNacimiento') }}</label>
                      </div>
                  </div>
                  
                  <div class="col-sm-3">
                    <label>Eps</label>
                    <div class="input-group">
                      <div v-validate :class="{'form-line':true, 'form-line error':errors.has('PEps')}">
                        <input v-validate="'required'" type="number" class="form-control" data-vv-as="eps" data-vv-name="PEps">
                      </div>
                      <label class="error">{{ errors.first('PEps') }}</label>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <label>Género</label>
                    <div class="input-group">
                      <div v-validate :class="{'form-line':true, 'form-line error':errors.has('PGenero')}">
                        <input v-validate="'required'" type="number" class="form-control" data-vv-as="eps" data-vv-name="PGenero">
                      </div>
                      <label class="error">{{ errors.first('PGenero') }}</label>
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
        <pre>DATA: {{ ubicaciones }}</pre>
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
        props:
         {
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
          return{
            PNombres: '',
            PApellidos: '',
            PTipoDocumento: '', 
            Pdocumento:'',
            PUbicacion: 0,
            PFechaNacimiento:'',
            PGenero:'',
            ubicaciones:[]
          }
        },
        created: function() {
          this.getUbicacion();
        },
        methods: {
         onComplete: function() {
          alert('Yay. Done!');
         },
         beforeTabSwitch(){
          return new Promise((resolver, reject) => {
            this.$validator.validate().then( valid => {
              resolver(valid);
            })
          });
         },
         getUbicacion: function(){
          var urlUbicacion = '/data/ubicacion';
          axios.get(urlUbicacion).then(response => {
            this.ubicaciones = response.data;
            console.log(this.ubicaciones);
          });
         }
       }
    };
</script>