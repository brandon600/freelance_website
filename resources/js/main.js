var pcBG = document.getElementById('pc-bg');
var pcHeading = document.getElementById('pc-heading');
var pcBody = document.getElementById('pc-body');
var pcImg = document.getElementById('pc-img');
var pcLink = document.getElementById('pc-link');
var pcIndustry = document.getElementById('pc-industry');


var pc1 = document.getElementById('p-cell1');
var pc2 = document.getElementById('p-cell2');
var pc3 = document.getElementById('p-cell3');
var pc4 = document.getElementById('p-cell4');
var pc5 = document.getElementById('p-cell5');
var pc6 = document.getElementById('p-cell6');

var pc1Link = ('http://webdemo200.com');
var pc2Link = ('http://plantspot.co');
var pc3Link = ('http://leadpalace.io');
var pc4Link = ('http://omnifoodeliveronline.com');
var pc5Link = ('http://coachingcamp.life');
var pc6Link = ('http://clevelandaccountingweb.com');

var fs1 = document.getElementById('fs1');
var fs2 = document.getElementById('fs2');
var fs3 = document.getElementById('fs3');
var fs4 = document.getElementById('fs4');

var fs1Link = 'https://www.instagram.com/brandonart444/';
var fs2Link = 'https://www.twitter.com/brandonart444/';
var fs3Link = 'https://www.facebook.com/Brandon-Art-2215424695351629/';
var fs4Link = 'https://www.youtube.com/channel/UCXYVs_UeVRcbzJajSmTNWbQ?';

//Blog Functionality
var blog1 = document.getElementById('blog1V');
var blog1L = 'http://brandonartportfolio.com/blog-post-1.html';

var blog2 = document.getElementById('blog2V');
var blog2L = 'http://brandonartportfolio.com/blog-post-2.html';

var blog3 = document.getElementById('blog3V');
var blog3L = 'http://brandonartportfolio.com/blog-post-3.html';


blog1.onclick = function() {
    window.open(blog1L, '_blank');
};

blog2.onclick = function() {
    window.open(blog2L, '_blank');
}

blog3.onclick = function() {
    window.open(blog3L, '_blank');
}



fs1.onclick = function() {
    window.open(fs1Link, '_blank');
};

fs2.onclick = function() {
    window.open(fs2Link, '_blank');
};

fs3.onclick = function() {
    window.open(fs3Link, '_blank');
};

fs4.onclick = function() {
    window.open(fs4Link, '_blank');
}

pc1.onclick = function() {
    window.open(pc1Link, '_blank');
};

pc2.onclick = function() {
    window.open(pc2Link, '_blank');
};

pc3.onclick = function() {
    window.open(pc3Link, '_blank');
};

pc4.onclick = function() {
    window.open(pc4Link, '_blank');
};

pc5.onclick = function() {
    window.open(pc5Link, '_blank');
};

pc6.onclick = function() {
    window.open(pc6Link, '_blank');
};





var currentPCLink = 'https://twitter.com';


pcLink.onclick = function() {
    window.open(currentPCLink, '_blank');
};

var pc1Func = function() {
    pcBG.src = 'resources/img/psi/pc1-h.jpg';
    pcHeading.innerHTML='Pig Game';
    pcBody.innerHTML = 'This website allows users to play a digital version of the common “pig” dice game. This site utilizes lots of javascript in order for the game to function completely and properly.';
    pcImg.src = 'resources/img/icons/projects-icon-1.png';
    pcIndustry.innerHTML = 'Game';
    currentPCLink = 'http://webdemo200.com'
};


var pc2Func = function() {
    pcBG.src = 'resources/img/psi/pc2-h.jpg';
    pcHeading.innerHTML='PlantSpot';
    pcBody.innerHTML = 'PlantSpot is business where you can buy different kinds of plants with a custom colored pot. They run giveaways, provide helpful info about plants, and really just offer a unique experience for their plant-loving customers.';
    pcImg.src = 'resources/img/icons/projects-icon-1.png';
    pcIndustry.innerHTML = 'Plants';
    currentPCLink = 'http://plantspot.co';
};

var pc3Func = function() {
    pcBG.src = 'resources/img/psi/pc3-h.jpg';
    pcHeading.innerHTML='LeadPalace';
    pcBody.innerHTML = 'LeadPalace is a digital marketing business that specializes in helping real estate agents. From content creation, to ppc ad management, to consulting. They help real estate agents with all their online digital marketing needs.';
    pcImg.src = 'resources/img/icons/projects-icon-1.png';
    pcIndustry.innerHTML = 'Real Estate';
    currentPCLink = 'http://leadpalace.io';
};

var pc4Func = function() {
    pcBG.src = 'resources/img/psi/pc4-h.jpg';
    pcHeading.innerHTML='Omnifood';
    pcBody.innerHTML = 'Omnifood is a food delivery company where you can sign up for a subscription that allows you to order food and get it delivered for free. It’s a perfect way to get into consistent healthy eating.';
    pcImg.src = 'resources/img/icons/projects-icon-1.png';
    pcIndustry.innerHTML = 'Food';
    currentPCLink = 'http://omnifoodeliveronline.com';
};

var pc5Func = function() {
    pcBG.src = 'resources/img/psi/pc5-h.jpg';
    pcHeading.innerHTML='CAMP';
    pcBody.innerHTML = 'CAMP is a community type organization that offers life coaching services to help their members grow. They take on challenges and events together. The name of the business itself is an acronym that stands for “Character, Attitude, Mindset, & Progress.';
    pcImg.src = '';
    pcIndustry.innerHTML = 'Self-Improvement';
    currentPCLink = 'https://coachingcamp.life';
};

var pc6Func = function() {
    pcBG.src = 'resources/img/psi/pc6-h.jpg';
    pcHeading.innerHTML='Cleveland Accounting Services';
    pcBody.innerHTML = 'Cleveland Accounting Services is a company based in Cleveland, OH that helps people take care of all their accounting needs. They handle accounting, bookkeeping, payroll, tax return preparation, and even more.';
    pcImg.src = '';
    pcIndustry.innerHTML = 'Accounting';
    currentPCLink = 'http://clevelandaccountingweb.com';
};

pc1.onclick = function() {
    pc1Func();
    animatePopup();
};

pc2.onclick = function() {
    animatePopup();
    pc2Func();
};

pc3.onclick = function() {
    pc3Func();
    animatePopup();
};

pc4.onclick = function() {
    pc4Func();
    animatePopup();
};

pc5.onclick = function() {
    pc5Func();
    animatePopup();
};

pc6.onclick = function() {
    pc6Func();
    animatePopup();
};


//Portfolio Popup

var testPopup = document.getElementById('test-popup');
var popup = document.getElementById('portfolio-popup');
var closePopup = document.getElementById('popup-close');

var pcRow1 = document.getElementById('pc-row1');
var pcRow2 = document.getElementById('pc-row2');

var animatePopup = function() {
    popup.classList.remove('popup-no-display');
    popup.classList.add('popup-yes-display');
    popup.classList.remove('bounceOut');

    pcRow1.classList.add('hidden');
    pcRow2.classList.add('hidden');
}

closePopup.addEventListener('click', function() {
    pcRow1.classList.remove('hidden');
    pcRow2.classList.remove('hidden');
    pcBG.src = '';
});


var popupTitles = [];
var popupDes = [];
var popupImgs = [];

popupTitles[0] = 'Food API';
popupTitles[2] = 'Plant Spot';
popupTitles[2] = 'LeadPalace';
popupTitles[3] = 'Omnifood';
popupTitles[4] = 'CAMP';
popupTitles[5] = 'Cleveland Accounting Services';

popupDes[0] = 'Website that allows people to search for food recipes.';
popupDes[0] = 'Website for a company that sells plants.';
popupDes[0] = 'Website for digital agency that focuses on helping real estate agents grow online.';
popupDes[0] = 'Website for a company that offers ordering and delivery of food.';
popupDes[0] = 'Website for a life coaching community & self-improvement group.';
popupDes[0] = 'Website for a business offering accounting services.';
