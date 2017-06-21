    // Ici, le DOM est entièrement défini
    function validerF(frm)
		{
			var data = {};
			data.mail = frm.elements["mail"].value;
			data.pass = frm.elements["pass"].value ;
			var res = document.getElementById('resultat');
			var json = JSON.stringify(data);
			var url = '<?=URL_BASE?>compte/connexion' ;
			 res.innerHTML = "<img src='<?=SERVER?>/dist/img/wait.gif' class='img-circle' alt='Veuillez patienter'>";
			jQuery.ajax({
				url: "index.php?p=Utilisateur/connexion",
				type: "POST",
				data: data,
				dataType: 'json',
				success: function (data) {
					if(data.erreur == 1)
					{
						//il ya une erreur
						res.innerHTML = data.etat;
					}else
					{
						//il ya pas d'erreur
						res.innerHTML = data.etat ;
            window.location.href = data.lien ;
					}
				},
				error: function (jqxr, status) {
					var res = document.getElementById('resultat');
					res.innerHTML = jqxr.responseText+"<br />"+status ;
					}
			});
			return false ;

		}
