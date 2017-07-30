const sphinx = {
	result: document.querySelector('.suggest__suggestsWrapper'),
	input: document.getElementById('title-search-input'),
	suggest: document.querySelector('.suggest'),
	clsdropdown: '_dropdown',
	init: function () {
		const _result = this.result,
			  _suggest = this.suggest,
			  _clsdropdown = this.clsdropdown;
		this.input.oninput = function () {
			data.value = this.value;
			console.log()
			data.value ? _suggest.classList.add(_clsdropdown) : _suggest.classList.remove(_clsdropdown)
			xhr.open(metod, url, true);
			xhr.setRequestHeader('Content-type', 'application/json; charset=utf-8');
			xhr.send(JSON.stringify(data));
			console.log(_result);
			xhr.onreadystatechange = function() {
				
				if (xhr.readyState != 4) return;

				if (xhr.status != 200) {
					alert(xhr.status + ': ' + xhr.statusText);
				} else {
					_result.innerHTML = xhr.responseText;
				}
			} 
		}
	}
}