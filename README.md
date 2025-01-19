# AI-Powered Virtual Try-On for Clothing 👚👖🤖

Overview 🚀👗👕

This project is an AI-driven virtual try-on system that allows users to visualize how different garments look on them without physically trying them on. By combining object detection, body pose estimation, and image overlay, it provides a realistic virtual fitting experience. This system is designed to integrate seamlessly with e-commerce platforms to enhance online shopping.

Features ✨🛠️

Real-Time Virtual Try-On: Try various garments such as jackets, shirts, and dresses in real time.

Body Pose Estimation: Uses MediaPipe for precise garment alignment based on the user's posture.

Personalized Fit Recommendations: Offers size suggestions tailored to user body measurements.

Distance Estimation and Size Adjustments: Ensures realistic garment overlay by adjusting for user distance.

E-Commerce Integration: Provides purchasing options directly within the application.

Prerequisites 📊💻

Make sure the following are installed before running the project:

Python: Version 3.7+

Required Packages

Install the necessary Python packages by running:

pip install numpy opencv-python mediapipe flask torch torchvision

How to Run 🏃‍♂️💻

Step 1: Clone or Download the Project 📁📥

Download or clone the repository to your local machine:

git clone https://github.com/astromanu007/AI_VIRTUAL_CLOTH_TRY_ONS/

Navigate to the project directory:

cd AI_VIRTUAL_CLOTH_TRY_ONS

Step 2: Set Up Model Files 📂🔗

This project requires pre-trained models for various features:

SMPL-X Model: For accurate 3D body modeling.

Pix2Pix (cGAN) Model: For garment overlay simulation.

Fully Connected Neural Network (FCNN): For personalized fit recommendations.

Ensure these files are stored in the models/ directory as per the project structure.

Step 3: Run the Application 🔄🚀

To start the virtual try-on system, execute the following command:

python app.py

Open your browser and navigate to http://127.0.0.1:5000 to access the application.

Command-Line Arguments

--model: Path to the trained garment overlay model.

--prototxt: Path to the Caffe deploy prototxt file (for object detection).

--confidence: Minimum probability to filter weak detections (default: 0.5).

Using the Application 🎥🖱️

Interactions

Webcam Access: Enables real-time garment try-on via webcam.

Image Uploads: Users can upload images of themselves and garments.

Actions

Click "Try On" to start the virtual try-on.

Press q to quit the application if using live detection.

Technology Stack 💻🔧

Pix2Pix (cGAN): For garment overlay simulation.

MediaPipe Pose: For identifying key body landmarks.

SMPL-X Model: For realistic 3D body modeling.

OpenCV: For image processing tasks.

Flask: Web application framework.

PyTorch: Machine learning framework.

Main Functionalities 💡🕸️

Garment Overlay Simulation: Uses Pix2Pix to overlay garments onto the user's image.

Pose Estimation: Detects key body landmarks for proper garment alignment.

Size Recommendation: Suggests the best garment size based on user measurements.

Real-Time Processing: Displays results instantly for quick try-on experiences.

Troubleshooting 🛠️🔧

Model Files Missing: Ensure all necessary model files are downloaded and placed in the models/ directory.

Webcam Not Detected: Verify your webcam is connected and accessible.

Dependency Issues: Run the following to install all dependencies:

pip install -r requirements.txt

Example Output 📸🖼

When you run the script, you will see:

The user's uploaded image with garment overlay.

Key body landmarks for alignment.

Size recommendations displayed alongside the visual try-on.

Additional Notes 📜✍️

Performance: Real-time performance depends on your device’s computational power.

Future Enhancements:

Improved body and garment segmentation.

Compatibility with additional clothing styles.

Focal Length Calibration: Adjust estimate_distance() for better accuracy.

License 📜

This project is licensed under the MIT License. See the LICENSE file for details.

Created by 👨‍💻

Name: Manish Dhatrak

Email: manishdhatrak1121@gmail.com

GitHub: GitHub Profile

Contact 📧🖌

For questions or issues, feel free to reach out:

Email: manishdhatrak1121@gmail.com

GitHub: https://github.com/astromanu007

