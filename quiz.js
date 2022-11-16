var myQuestions = [           // Питання тесту
	{
		question: "Вирубка лісів є другою основною причиною глобального потепління у світі. Правда чи ні?",
		answers: {
			a: 'Так	',
			b: 'Ні	',
		},
		correctAnswer: 'a'
	},
	{
		question: "Що з наведеного НЕ є проблемою, викликаною вирубкою лісів?",
		answers: {
			a: 'Втрата біорізноманіття	',
			b: 'Шкода економіці	',
			c: 'Заподіяння шкоди багатьом корінним народам	',
			d: 'Усі вони є проблемами, спричиненими вирубкою лісів	',
		},
		correctAnswer: 'd'
	},
	{
		question: "Що з наведеного НЕ є причиною важливості біорізноманіття?",
		answers: {
			a: 'Втрата біорізноманіття призведе до погіршення якості води	',
			b: 'У світі надто багато видів тварин	',
			c: 'Багато видів діють як засоби боротьби зі шкідниками	',
			d: 'Біорізноманіття забезпечує продовольчу безпеку, надаючи поживні речовини різноманітним видам рослин і тварин. Втрата біорізноманіття зменшує доступне харчування	',
		},
		correctAnswer: 'b'
	},
	{
		question: "Яка наземна екосистема має найбільше біорізноманіття?",
		answers: {
			a: 'Пустелі	',
			b: 'Дощові тропічні ліси	',
			c: 'Тундра	',
			d: 'Лугові угіддя	',
		},
		correctAnswer: 'b'
	},
	{
		question: "Що ви можете зробити для боротьби з вирубкою лісів?",
		answers: {
			a: 'Залиште ліси і садіть більше дерев	',
			b: 'Зменште використання виробів з деревного волокна, включаючи папір і картон	',
			c: 'Вимагайте лісової продукції зі стійких джерел і ланцюгів постачання без вирубки лісів	',
			d: 'Все вищеперераховане	',
		},
		correctAnswer: 'd'
	},
	{
		question: "Що відомо як «шосте вимирання»?",
		answers: {
			a: 'Той факт, що сьогодні у світі існує шість основних видів, які знаходяться під загрозою зникнення	',
			b: 'Шостий вид, який вимер	',
			c: "Продовження фільму П'ятий елемент	",
			d: 'Нинішній період часу, коли види зникають надзвичайно швидко	',
		},
		correctAnswer: 'd'
	},
	{
		question: "Скільки дерев потрібно, щоб забезпечити добовий запас кисню для 4 людей?",
		answers: {
			a: '1	',
			b: '10	',
			c: '50	',
			d: '100	',
		},
		correctAnswer: 'a'
	},
	{
		question: "Яку частину глобальних викидів викопного палива, що викидається людиною щороку з 1990 по 2007 рр., поглинули ліси?",
		answers: {
			a: '65%	',
			b: '33%	',
			c: '15%	',
			d: '5%	',
		},
		correctAnswer: 'b'
	},
	{
		question: "Яка частина суші Землі вкрита лісами?",
		answers: {
			a: '5%	',
			b: '10%	',
			c: '16%	',
			d: '31%	',
		},
		correctAnswer: 'd'
	},
	{
		question: "Що НЕ є фактором, що сприяє втраті біорізноманіття?",
		answers: {
			a: 'Посадка дерев	',
			b: 'Урбанізація	',
			c: 'Зміна клімату	',
			d: 'Надмірна експлуатація видів	',
		},
		correctAnswer: 'a'
	},
];

var quizContainer = document.getElementById('quiz');
var resultsContainer = document.getElementById('results');
var submitButton = document.getElementById('submit');

generateQuiz(myQuestions, quizContainer, resultsContainer, submitButton);

// Головна функція, яка створює тест
function generateQuiz(questions, quizContainer, resultsContainer, submitButton){

  function showQuestions(questions, quizContainer){
	// Об'являємо масиви для повертання результату та відповедей
	var output = [];
	var answers;

	// Для кожного питання
	for(var i=0; i<questions.length; i++){

		// Робимо масив відповідей пустим
		answers = [];

		// Для кожної відповіді
		for(letter in questions[i].answers){

			// додаємо html radio button
			answers.push(
				'<label>'
					+ '<input type="radio" name="question'+i+'" value="'+letter+'">'
					+ letter + ': '
					+ questions[i].answers[letter]
				+ '</label>'
			);
		}
    // (Плюси додають строки! ^^^)

		// Додаємо до output питання та відповідь
		output.push(
			'<div class="question">' + questions[i].question + '</div>'
			+ '<div class="answers">' + answers.join('') + '</div>'
		);
	}

	// Робимо з масива output string для html та розміщаємо на сторінці
  // (в елемент quizContainer)
	quizContainer.innerHTML = output.join('');
  }

  function showResults(questions, quizContainer, resultsContainer){

	// Збираємо всі відповіді з тесту
	var answerContainers = quizContainer.querySelectorAll('.answers');

	// Змінні для поточної відповіді та кількості вірних відповедей
	var userAnswer = '';
	var numCorrect = 0;

	// Для кожного питання
	for(var i=0; i<questions.length; i++){

		// Записуємо у userAnswer вибрану відповідь
		userAnswer = (answerContainers[i].querySelector('input[name=question'+i+']:checked')||{}).value;

		// Якщо відповідь вірна тоді додаємо до вірних відповедей 1 та робимо відповідь зеленою
		if(userAnswer===questions[i].correctAnswer){
			numCorrect++;

			answerContainers[i].style.color = 'lightgreen';
		}
		// В іншому випадку відповідь красимо червоним
		else{
			answerContainers[i].style.color = 'red';
		}
	}

	// Виводимо кількість відповідей з усіх
	resultsContainer.innerHTML = numCorrect + ' вірних відповідей з ' + questions.length;
  }

	// Викликаємо створені функції
  // Показати питання
	showQuestions(questions, quizContainer);

	// Викликати функцію showResults, коли натиснули на кнопку "Отримати результати"
	submitButton.onclick = function(){
		showResults(questions, quizContainer, resultsContainer);
	}
}
