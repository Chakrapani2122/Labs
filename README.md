# Labs
 Lab programs

## Web Technologies Lab

### Objectives

To enable the student to program web applications using the following technologies HTML ,
Javascript ,AJAX ,PHP , Tomcat Server, Servlets ,JSP

### WEB TECHNOLOGIES LAB

I. Install the following on the local machine Apache Web Server (if not installed)

• Tomcat Application Server locally

• Install MySQL (if not installed)

• Install PHP and configure it to work with Apache web server and

• MySQL (if not already configured)

2.Write an HTML page including any required Javascript that takes a number from one text field in
the range of 0 to 999 and shows it in another text field in words. If the number is out of range, it
should show "out of range" and if it is not a number, it should show "not a number" message in the
result box.

3.Write an HTML page that has one input, which can take multi-line text and a submit button. Once
the user clicks the submit button, it should show the number of characters, words and lines in the
text entered using an alert message. Words are separated with white space and lines are separated
with new line character.

4.Write an HTML page that contains a selection box with a list of 5 countries. When the user selects a
country, its capital should be printed next to the list. Add CSS to customize the properties of the font of the
capital (color, bold and font size).

5.Create an XML document that contains 10 users information. Write a Java program, which takes
User ld as input and returns the user details by taking the user information from the XML document
using

(a) DOM Parser and

(b) SAX parser

6.Implement the following web applications using

(a) PHP,

(b) Servlets and

(c) JSP:

i) A user validation web application, where user submits the login name and password to server. These are checked against the data already available in database and if the data matches a successful login page is returned. Otherwise a failure message is shown to the user.

(ii). Modify the above program to use an xml file instead of database.

(iii). Modify the above program to use AJAX to show the result on the same page below the submit button.

(iv) A simple calculator web application that takes 2 numbers and an operator (+,-,*,/,%) from an HTML page and returns the result page with the operation performed on the operands.

(v) modify the above program such that it stores each query in a database and checks the database first for the result .if the query is already available in the database, it returns the value that was previously computed or it computes the result and returns it after storing the new query and result in database.

(vi) A web application takes a name as input and on submit it shows a hello name page where  name is taken from the request and it shows a start time at the right top corner of the page and provides the logout button on clicking this button it should shoe a logout page with thank you name message with the duration of Usage.

(vii). A web application that takes name and age from an html page. If the age is less than 18, it should send a page with “hello name, you are not authorized to visit this site” message where name should be replaced with the entered name.  Otherwise it should send “welcome name to this site” message.

(viii). A web application for implementation:

the user is first served a login page which takes user’s name and password. After submitting the details the server checks these values against the data from a database and takes the following decisions.

If name and password matches, serves a welcome page with user’s full name.

If name matches and password doesn’t match, then serves “password mismatch” page.

If name is not found in the database, serves a registration page, where user’s full name is asked and on submitting the full name, it stores the login name, password and fullname in the database

ix) A web application that lists all cookies stored in the browser on clicking “list cookies” button, add cookies if necessary

## Machine Learning Lab

Course objectives: This course will enable students to

1. Make use of Data sets in implementing the machine learning algorithms

2. Implement the machine learning concepts and algorithms in any suitable language of
choice.

### Description

1. The programs can be implemented in either JAVA or Python.

2. For Problems 1 to 6 and 10, programs are to be developed without using the built-in classes
or APIs of Java/Python.

3. Data sets can be taken from standard repositories

(<https://archive.ics.uci.edu/ml/datasets.html>) or constructed by the students.

### Lab Experiments

1. Implement and demonstrate the FIND-S algorithm for finding the most specific hypothesis based
on a given set of training data samples. Read the training data from a CSV file.

2. For a given set of training data examples stored in a .CSV file, implement and demonstrate the
Candidate-Elimination algorithm to output a description of the set of all hypotheses
consistent with the training examples.

3. Write a program to demonstrate the working of the decision tree based ID3 algorithm. Use an
appropriate data set for building the decision tree and apply this knowledge to classify a new
sample.

4. Build an Artificial Neural Network by implementing the Back propagation algorithm and
test the same using appropriate data sets.

5. Write a program to implement the naïve Bayesian classifier for a sample training data set
stored as a .CSV file. Compute the accuracy of the classifier, considering few test data sets.

6. Assuming a set of documents that need to be classified, use the naïve Bayesian Classifier
model to perform this task. Built-in Java classes/API can be used to write the program.
Calculate the accuracy, precision, and recall for your data set.

7. Write a program to construct a Bayesian network considering medical data. Use this model to
demonstrate the diagnosis of heart patients using standard Heart Disease Data Set. You can
use Java/Python ML library classes/API.

8. Apply EM algorithm to cluster a set of data stored in a .CSV file. Use the same data set for
clustering using k-Means algorithm. Compare the results of these two algorithms and
comment on the quality of clustering. You can add Java/Python ML library classes/API in the
program.

9. Write a program to implement k-Nearest Neighbour algorithm to classify the iris data set.
Print both correct and wrong predictions. Java/Python ML library classes can be used for this
problem.

10. Implement the non-parametric Locally Weighted Regression algorithm in order to fit data
points. Select appropriate data set for your experiment and draw graphs



## Deep Learning Lab


### Course Objectives:

1. To Build the Foundation of Deep Learning.

2. To Understand How to Build the Neural Network.

3. To enable students to develop successful machine learning concepts.

### Course Outcomes:

1. Upon the Successful Completion of the Course, the Students would be able to:

2. Learn the Fundamental Principles of Deep Learning.

3. Identify the Deep Learning Algorithms for Various Types of Learning Tasks in various domains.

4. Implement Deep Learning Algorithms and Solve Real-world problems.

### LIST OF EXPERIMENTS:

1. Setting up the Spyder IDE Environment and Executing a Python Program

2. Installing Keras, Tensorflow and Pytorch libraries and making use of them

3. Applying the Convolution Neural Network on computer vision problems

4. Image classification on MNIST dataset (CNN model with Fully connected layer)

5. Applying the Deep Learning Models in the field of Natural Language Processing

6. Train a sentiment analysis model on IMDB dataset, use RNN layers with LSTM/GRU notes

7. Applying the Autoencoder algorithms for encoding the real-world data

8. Applying Generative Adversial Networks for image generation and unsupervised tasks.

### TEXT BOOKS:

1. Deep Learning by Ian Goodfellow, Yoshua Bengio and Aaron Courville, MIT Press.

2. The Elements of Statistical Learning by T. Hastie, R. Tibshirani, and J. Friedman, Springer.

3. Probabilistic Graphical Models. Koller, and N. Friedman, MIT Press.

### REFERENCES:

1. Bishop, C.M., Pattern Recognition and Machine Learning, Springer, 2006.

2. Yegnanarayana, B., Artificial Neural Networks PHI Learning Pvt. Ltd, 2009.

3. Golub, G.H., and Van Loan, C.F., Matrix Computations, JHU Press, 2013.

4. Satish Kumar, Neural Networks: A Classroom Approach, Tata McGraw Hill Education, 2004.

### EXTENSIVE READING:

1. http://www.deeplearning.net

2. https://www.deeplearningbook.org/

3. https://developers.google.com/machine-learning/crash-course/ml-intro

4. www.cs.toronto.edu/~fritz/absps/imagenet.pdf

5. http://neuralnetworksanddeeplearning.com/

