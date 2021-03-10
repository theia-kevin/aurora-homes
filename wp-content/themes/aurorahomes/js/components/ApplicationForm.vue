<template>
  <div>
    <div class="mb-8">
      <a class="bg-aurora-blue-04 px-8 py-2 rounded-full font-light text-white" href="/careers">Back to Job Listings</a>
    </div>
    <p class="font-black leading-tight text-5xl text-aurora-blue-04 uppercase">{{ listing.post_title }}</p>
    <p class="font-black leading-tight text-2xl text-aurora-blue-03 uppercase mb-8">{{ listing.post_location }}</p>
    <div class="mb-16" v-html="listing.post_description"></div>
    <p class="font-black leading-tight text-4xl text-aurora-blue-04 uppercase border-b border-black pb-4 mb-8">Apply For
      This Position</p>
    <ValidationObserver ref="formObserver">
      <form v-on:submit.prevent="onSubmit">
        <div class="grid grid-cols-12 gap-8">
          <div class="col-span-12 2xl:col-span-6">
            <ValidationProvider rules="fieldRequired" v-slot="{ errors }">
              <input v-model="first_name" type="text" placeholder="First Name*">
              <small class="text-aurora-red-01">{{ errors[0] }}</small>
            </ValidationProvider>
          </div>
          <div class="col-span-12 2xl:col-span-6">
            <ValidationProvider rules="fieldRequired" v-slot="{ errors }">
              <input v-model="last_name" type="text" placeholder="Last Name*">
              <small class="text-aurora-red-01">{{ errors[0] }}</small>
            </ValidationProvider>
          </div>
          <div class="col-span-12 2xl:col-span-6">
            <ValidationProvider rules="fieldRequired" v-slot="{ errors }">
              <input v-model="email" type="email" placeholder="Email*">
              <small class="text-aurora-red-01">{{ errors[0] }}</small>
            </ValidationProvider>
          </div>
          <div class="col-span-12 2xl:col-span-6">
            <ValidationProvider rules="fieldRequired" v-slot="{ errors }">
              <input v-model="phone" type="text" placeholder="Phone*">
              <small class="text-aurora-red-01">{{ errors[0] }}</small>
            </ValidationProvider>
          </div>
          <div class="col-span-12 2xl:col-span-6">
            <ValidationProvider rules="fieldRequired" v-slot="{ errors }">
              <input v-model="address" type="text" placeholder="Address*">
              <small class="text-aurora-red-01">{{ errors[0] }}</small>
            </ValidationProvider>
          </div>
          <div class="col-span-12 2xl:col-span-6">
            <ValidationProvider rules="fieldRequired" v-slot="{ errors }">
              <input v-model="city" type="text" placeholder="City*">
              <small class="text-aurora-red-01">{{ errors[0] }}</small>
            </ValidationProvider>
          </div>
          <div class="col-span-12 2xl:col-span-6">
            <ValidationProvider rules="fieldRequired" v-slot="{ errors }">
              <input v-model="postal_code" type="text" placeholder="Postal Code*">
              <small class="text-aurora-red-01">{{ errors[0] }}</small>
            </ValidationProvider>
          </div>
          <div class="col-span-12 2xl:col-span-6">
            <ValidationProvider rules="fieldRequired" v-slot="{ errors }">
              <select v-model="country">
                <option value="" selected disabled>Country*</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Australia">Australia</option>
              </select>
              <small class="text-aurora-red-01">{{ errors[0] }}</small>
            </ValidationProvider>
          </div>
        </div>
        <div class="border-b border-black py-4 my-8"></div>
        <div class="grid grid-cols-12 grid-rows-3 gap-8">
          <div class="col-span-12 2xl:col-span-3 row-start-1">
            <ValidationProvider rules="resumeRequired" v-slot="{ errors, validate }">
              <label>Resume*</label>
              <input type="file" v-if="resumeFieldEnabled" v-on:change="handleResume($event) || validate($event)">
              <div>
                <small class="text-aurora-red-01">{{ errors[0] }}</small>
              </div>
            </ValidationProvider>
          </div>
          <div class="col-span-12 2xl:col-span-3 row-start-2">
            <ValidationProvider rules="dateAvailableRequired" v-slot="{ errors }">
              <label>Date Available*</label>
              <datepicker v-model="date_available" :format="formatDateAvailable"></datepicker>
              <small class="text-aurora-red-01">{{ errors[0] }}</small>
            </ValidationProvider>
          </div>
          <div class="col-span-12 2xl:col-span-3 row-start-3">
            <ValidationProvider rules="fieldRequired" v-slot="{ errors }">
              <label>Desired Pay*</label>
              <input v-model="desired_pay" type="text">
              <small class="text-aurora-red-01">{{ errors[0] }}</small>
            </ValidationProvider>
          </div>
        </div>
        <div class="border-b border-black py-4 my-8"></div>
        <div class="grid grid-cols-12 gap-8">
          <div class="col-span-12 2xl:col-span-6">
            <input v-model="website" type="text" placeholder="Website, Blog, or Portfolio">
          </div>
          <div class="col-span-12 2xl:col-span-6">
            <input v-model="profile_url" type="text" placeholder="Linkedin Profile URL">
          </div>
        </div>
        <div class="grid grid-cols-12">
          <div class="col-span-12 my-8 flex justify-end">
            <input class="ml-auto bg-aurora-blue-04 px-8 py-2 rounded-full font-light text-white" type="submit" value="Submit Application">
          </div>
        </div>
      </form>
    </ValidationObserver>
  </div>
</template>
<script>
import Datepicker from 'vuejs-datepicker';
import moment from 'moment';
import { extend, ValidationProvider, ValidationObserver } from 'vee-validate';
import { required } from 'vee-validate/dist/rules';
import axios from 'axios';

extend('fieldRequired', {
  ...required,
  message: 'Please fill in this field'
});

extend('dateAvailableRequired', {
  ...required,
  message: 'Please select your available date'
});

extend('resumeRequired', {
  ...required,
  message: 'Please upload your resume'
});

export default {
  name: 'ApplicationForm',
  components: {
    ValidationProvider,
    ValidationObserver,
    Datepicker,
  },
  data () {
    return {
      previous_url: '/careers',
      listing: window.LISTING.data,
      ajax_url: window.LISTING.ajax_url,
      nonce: window.LISTING.nonce,
      first_name: '',
      last_name: '',
      email: '',
      phone: '',
      address: '',
      city: '',
      postal_code: '',
      country: '',
      resume: null,
      resumeFieldEnabled: true,
      date_available: '',
      desired_pay: '',
      website: '',
      profile_url: '',
    };
  },
  methods: {
    handleResume (event) {
      this.resume = event.target.files[0];
      this.resumeUploaded = true;
    },
    formatDateAvailable (date) {
      return moment(date).format('DD/MM/YYYY');
    },
    onSubmit () {
      this.$refs.formObserver.validate().then(success => {
        if (!success) {
          return;
        }

        let formData = new FormData();
        formData.append('action', 'aurora_send_application');
        formData.append('nonce', this.nonce);
        formData.append('first_name', this.first_name);
        formData.append('last_name', this.last_name);
        formData.append('email', this.email);
        formData.append('phone', this.phone);
        formData.append('address', this.address);
        formData.append('city', this.city);
        formData.append('postal_code', this.postal_code);
        formData.append('country', this.country);
        formData.append('resume', this.resume);
        formData.append('date_available', moment(this.date_available).format('DD/MM/YYYY'));
        formData.append('desired_pay', this.desired_pay);
        formData.append('website', this.website);
        formData.append('profile_url', this.profile_url);

        axios({
          method: 'POST',
          url: this.ajax_url,
          headers: {
            'Content-Type': 'multipart/form-data'
          },
          data: formData,
        }).then(response => {
          alert(response.data.message);

          this.first_name = this.last_name = this.email = this.phone = this.address = this.city = this.postal_code = this.country = this.date_available = this.desired_pay = this.website = this.profile_url = '';
          this.resume = null;
          this.resumeFieldEnabled = false;

          this.$nextTick(() => {
            this.$refs.formObserver.reset();
            this.resumeFieldEnabled = true;
          });
        }).catch(error => {
          console.log(error);
        });
      });
    },
  },
  mounted () {
    if (!this.listing) {
      window.location = this.previous_url;
    }
  }
};
</script>
<style lang="scss">
input[type="text"], input[type="email"], input[type="number"], select, textarea {
  @apply border border-aurora-grey-01 bg-white py-3 px-4 w-full;
  line-height: 0;
}

label {
  display: block;
  color: #9ca3af;
}
</style>
