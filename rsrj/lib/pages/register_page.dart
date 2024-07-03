// ignore_for_file: unused_element, prefer_const_constructors

import 'package:flutter/material.dart';
import 'package:rsrj/components/my_button.dart';
import 'package:rsrj/components/my_textfield.dart';
import 'package:rsrj/pages/login_page.dart';
import 'package:rsrj/pages/home_page.dart';

class RegisterPage extends StatelessWidget {
  RegisterPage({super.key});

  // text editing controllers
  final fullNameController = TextEditingController();
  final phoneNumberController = TextEditingController();
  final emailController = TextEditingController();
  final usernameController = TextEditingController();
  final passwordController = TextEditingController();

  // sign user in method
  void signUserUp(BuildContext context) {
    // implementasi logika masuk pengguna disini

    Navigator.push(
      context,
      MaterialPageRoute(builder: (context) => HomePage()),
    );
  }

  // forgot password method
  void _forgotPassword(BuildContext context) {
    // kode forgot password
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: Colors.grey[300],
      body: SafeArea(
        child: Center(
          child: SingleChildScrollView(
            child: Column(
              mainAxisAlignment: MainAxisAlignment.center,
              children: [
                // logo
                const SizedBox(height: 50),
                Image.asset(
                  'lib/images/logos.png', // Sesuaikan dengan path gambar Anda
                  width: 135, // Sesuaikan dengan lebar gambar
                  height: 135, // Sesuaikan dengan tinggi gambar
                ),

                const SizedBox(height: 50),

                // welcome back, you've been missed!
                Text(
                  'Welcome To Sistem Rawat Jalan',
                  style: TextStyle(
                    color: Colors.grey[700],
                    fontSize: 16,
                  ),
                ),

                const SizedBox(height: 25),

                // nama lengkap textfield
                MyTextField(
                  controller: fullNameController,
                  hintText: 'Full Name',
                  obscureText: false,
                ),

                const SizedBox(height: 10),

                // nomor telepon textfield
                MyTextField(
                  controller: phoneNumberController,
                  hintText: 'Phone Number',
                  obscureText: false,
                ),

                const SizedBox(height: 10),

                // email textfield
                MyTextField(
                  controller: emailController,
                  hintText: 'Email',
                  obscureText: false,
                ),

                const SizedBox(height: 10),

                // username textfield
                MyTextField(
                  controller: usernameController,
                  hintText: 'Username',
                  obscureText: false,
                ),

                const SizedBox(height: 10),

                // password textfield
                MyTextField(
                  controller: passwordController,
                  hintText: 'Password',
                  obscureText: true,
                ),

                const SizedBox(height: 15),

                // forgot password?
                // kode forgot password

                const SizedBox(height: 15),

                // sign up button
                MyButton(
                  text: 'Sign Up',
                  onTap: () => signUserUp(context),
                ),

                const SizedBox(height: 30),

                // or continue with
                // kode or continue with

                const SizedBox(height: 30),

                // google + apple sign in buttons
                // kode google + apple sign in buttons

                const SizedBox(height: 50),

                // back to login button
                GestureDetector(
                  onTap: () => Navigator.push(
                    context,
                    MaterialPageRoute(builder: (context) => LoginPage()),
                  ),
                  child: Text(
                    'Back to Login',
                    style: TextStyle(
                      color: Colors.blue,
                      fontWeight: FontWeight.bold,
                    ),
                  ),
                ),
              ],
            ),
          ),
        ),
      ),
    );
  }
}
