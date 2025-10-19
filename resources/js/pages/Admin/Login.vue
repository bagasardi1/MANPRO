<template>
  <div class="flex justify-center items-center min-h-screen bg-pink-50">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
      <h2 class="text-2xl font-bold mb-6 text-center">Login Admin 🍰</h2>

      <form @submit.prevent="handleLogin">
        <div class="mb-4">
          <label class="block text-gray-700 mb-1">Email</label>
          <input v-model="email" type="email" class="w-full border rounded px-3 py-2" required />
        </div>

        <div class="mb-4">
          <label class="block text-gray-700 mb-1">Password</label>
          <input v-model="password" type="password" class="w-full border rounded px-3 py-2" required />
        </div>

        <button type="submit"
          class="w-full bg-pink-600 text-white py-2 rounded hover:bg-pink-700 transition">
          Login
        </button>

        <p v-if="error" class="text-red-500 text-sm mt-3">{{ error }}</p>
      </form>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue'
import axios from 'axios'
import { useRouter } from 'vue-router'

const router = useRouter()
const email = ref('')
const password = ref('')
const error = ref('')

const handleLogin = async () => {
  error.value = ''
  try {
    const res = await axios.post('/api/admin/login', { email: email.value, password: password.value })
    localStorage.setItem('admin_token', res.data.token)
    router.push('/dashboard')
  } catch (err) {
    error.value = err.response?.data?.message || 'Login gagal'
  }
}
</script>
