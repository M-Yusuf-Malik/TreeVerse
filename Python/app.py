from flask import Flask, render_template, request, redirect
from tensorflow.keras.models import load_model
import numpy as np
import cv2

app = Flask(__name__)


image_size = 299
species_list = ["Non-Plant", "Plant"]


def pred_process(path):
    img = cv2.imread(path)
    img = cv2.resize(img, (image_size, image_size))

    img = cv2.cvtColor(img, cv2.COLOR_BGR2RGB)
    img = np.array(img)
    img = img.reshape(1, image_size, image_size, 3)

    return img


@app.route('/', methods=['GET'])
def index():
    return render_template("UploadPage.php")


@app.route('/result', methods=['POST'])
def result():
    img = request.files['img']
    img.save('static/Saved.png')

    model = load_model('static/TreeVerse_Model.h5')
    path = "static/Saved.png"
    img_input = pred_process(path)

    prediction = model.predict(img_input)

    y_class = (prediction[0][1] > 0.1)

    final_prediction = y_class

    if final_prediction == 1:
        return redirect("https://treeverse.000webhostapp.com/TreeVerse/BackEnd/AddScore.php")
    else:
        return redirect("https://treeverse.000webhostapp.com/TreeVerse/BackEnd/FailurePage.php")


if __name__ == '__main__':
    # app.run(debug=True)
    app.run(debug=True, port=40)
