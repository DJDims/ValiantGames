const gamesBase = document.getElementById("gamesBase");
const gamesThis = document.getElementById("gamesThis");
const form = document.getElementById("bundleForm");

function addGamesToBundle() {
	const gamesBaseOptions = getSelectValues(gamesBase);
	
	gamesBaseOptions.forEach(element => {
		removeOptionFromSelect(element, gamesBase)
		addOptionToSelect(element, gamesThis)
	});
	setAllSelected(gamesThis)
}

function removeGamesFromBundle() {
	const gamesThisOptions = getSelectValues(gamesThis);
	
	gamesThisOptions.forEach(element => {
		removeOptionFromSelect(element, gamesThis)
		addOptionToSelect(element, gamesBase)
	});
	setAllSelected(gamesThis)
}

function getSelectValues(select) {
	const result = [];
	const options = select.options;
	let opt;

	for (let i = 0; i < options.length; i++) {
		opt = options[i];

		if (opt.selected) {
			result.push(opt);
		}
	}
	return result;
}

function removeOptionFromSelect(option, select) {
	select.removeChild(option);
}

function addOptionToSelect(option, select) {
	select.appendChild(option);
}

function setAllSelected(select) {
	const options = select.options;
	for (let i = 0; i < options.length; i++) {
		console.log(options[i].id)
		options[i].selected = 'selected';
	}
}

function smbtForm() {
	setAllSelected(gamesThis);
    // form.submit();
}