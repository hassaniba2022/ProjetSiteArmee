// Variables

let btn = document.querySelector('#new-quote');
let quote = document.querySelector('.quote');
let person = document.querySelector('.person');

const quotes = [{
    quote: `"The best way to find yourself is to lose yourself in the service of others."`,
    person: ` Mahatma Gandhi`
}, {
    quote: `"If you want to live a happy life, tie it to a goal, not to people or things."`,
    person: ` Albert Einstein`
}, {
    quote: `"At the best, man is the noblest of all animals; separated from law and justice he is the worst."`,
    person: ` Aristote`
}, {
    quote: `"Your time is limited, so don't waste it living someone else's life."`,
    person: ` Steve Jobs`
}, {
    quote: `"Tell me and I forget. Teach me and I remember. Involve me and I learn."`,
    person: ` Benjamin Franklin`
}, {
    quote: `"If you look at what you have in life, you'll always have more. If you look at what you don't have in life, you'll never have enough."`,
    person: ` Oprah Winfrey`
}]

btn.addEventListener('click', function(){
    let random = Math.floor(Math.random() * quotes.length);

    quote.innerText = quotes[random].quote;
    person.innerText = quotes[random].person;
})