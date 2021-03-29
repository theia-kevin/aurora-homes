<template>
  <div>

    <div class="mb-[100px]">
      <div class="flex flex-wrap items-center justify-between mb-[30px]">
        <div class="mb-[15px]">
          <p class="font-foco-black text-[50px] leading-[60px] text-aurora-blue-04 uppercase">{{ listing.post_title }}</p>
          <p class="font-foco-bold text-[24px] text-aurora-blue-03 uppercase">{{ listing.post_location }}</p>
        </div>
        <a class="inline-block font-foco-light text-[16px] text-white bg-aurora-blue-02 border-[5px] border-aurora-blue-02 rounded-full py-[5px] px-[30px] transition-all duration-300 hover:transform hover:translate-y-1 hover:-translate-x-1 hover:shadow-inner hover:border-aurora-yellow-01" :href="previous_url">Back to Job Listings</a>
      </div>
      <div class="font-foco-light text-[16px] text-aurora-grey-02" v-html="listing.post_description"></div>
    </div>
    <p class="font-foco-black text-[36px] text-aurora-blue-04 uppercase border-b border-aurora-grey-01 mb-[30px]">Apply For This Position</p>
    <ValidationObserver ref="formObserver">
      <form v-on:submit.prevent="onSubmit">
        <div class="grid grid-cols-12" style="gap: 30px">
          <div class="col-span-12 xl:col-span-6">
            <ValidationProvider rules="fieldRequired" v-slot="{ errors }">
              <input v-model="first_name" type="text" placeholder="First Name*">
              <small>{{ errors[0] }}</small>
            </ValidationProvider>
          </div>
          <div class="col-span-12 xl:col-span-6">
            <ValidationProvider rules="fieldRequired" v-slot="{ errors }">
              <input v-model="last_name" type="text" placeholder="Last Name*">
              <small>{{ errors[0] }}</small>
            </ValidationProvider>
          </div>
          <div class="col-span-12 xl:col-span-6">
            <ValidationProvider rules="fieldRequired" v-slot="{ errors }">
              <input v-model="email" type="email" placeholder="Email*">
              <small>{{ errors[0] }}</small>
            </ValidationProvider>
          </div>
          <div class="col-span-12 xl:col-span-6">
            <ValidationProvider rules="fieldRequired" v-slot="{ errors }">
              <input v-model="phone" type="text" placeholder="Phone*">
              <small>{{ errors[0] }}</small>
            </ValidationProvider>
          </div>
          <div class="col-span-12 xl:col-span-6">
            <ValidationProvider rules="fieldRequired" v-slot="{ errors }">
              <input v-model="address" type="text" placeholder="Address*">
              <small>{{ errors[0] }}</small>
            </ValidationProvider>
          </div>
          <div class="col-span-12 xl:col-span-6">
            <ValidationProvider rules="fieldRequired" v-slot="{ errors }">
              <input v-model="city" type="text" placeholder="City*">
              <small>{{ errors[0] }}</small>
            </ValidationProvider>
          </div>
          <div class="col-span-12 xl:col-span-6">
            <ValidationProvider rules="fieldRequired" v-slot="{ errors }">
              <input v-model="postal_code" type="text" placeholder="Postal Code*">
              <small>{{ errors[0] }}</small>
            </ValidationProvider>
          </div>
          <div class="col-span-12 xl:col-span-6">
            <ValidationProvider rules="fieldRequired" v-slot="{ errors }">
              <select v-model="country">
                <option value="" selected disabled>Country*</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Australia">Australia</option>
              </select>
              <small>{{ errors[0] }}</small>
            </ValidationProvider>
          </div>
          <div class="col-span-12 xl:col-span-6">
            <input v-model="website" type="text" placeholder="Website, Blog, or Portfolio (optional)">
          </div>
          <div class="col-span-12 xl:col-span-6">
            <input v-model="profile_url" type="text" placeholder="Linkedin Profile URL (optional)">
          </div>
          <div class="col-span-12 xl:col-span-6">
            <ValidationProvider v-slot="{ errors }">
              <datepicker v-model="date_available" :format="formatDateAvailable" placeholder="Date Available (optional)"></datepicker>
              <small>{{ errors[0] }}</small>
            </ValidationProvider>
          </div>
          <div class="col-span-12 xl:col-span-6">
            <ValidationProvider v-slot="{ errors }">
              <input v-model="desired_pay" type="text" placeholder="Desired Pay (optional)">
              <small>{{ errors[0] }}</small>
            </ValidationProvider>
          </div>
          <div class="col-span-12 xl:col-span-6">
            <ValidationProvider v-slot="{ errors, validate }">
              <label class="block font-foco-light text-[18px] pb-[15px]">Resume (optional):</label>
              <input type="file" v-if="resumeFieldEnabled" v-on:change="handleResume($event) || validate($event)">
              <div>
                <small>{{ errors[0] }}</small>
              </div>
            </ValidationProvider>
          </div>
          <div class="col-span-12  xl:col-span-6 flex item-center justify-end py-[30px]">
            <input class="inline-block font-foco-light text-[16px] text-white bg-aurora-blue-02 border-[5px] border-aurora-blue-02 rounded-full py-[5px] px-[30px] transition-all duration-300 hover:transform hover:translate-y-1 hover:-translate-x-1 hover:shadow-inner hover:border-aurora-yellow-01" type="submit" value="Submit Application">
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
  @apply w-full;
}

input[type="text"], input[type="email"], input[type="number"], select, textarea, label {
  @apply font-foco-light text-[16px];
}

small {
  @apply font-foco-light text-[16px] text-aurora-red-01;
}
</style>
