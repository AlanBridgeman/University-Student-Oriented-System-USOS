            <div id="login" aria-hidden="true">
				<form id="loginForm">
					<fieldset>
						<legend>Login</legend>
						<table>
							<tr>
								<td>
									<label id="idLabel" for="id">User ID</label>
								</td>
								<td>
									<input id="id" name="id" type="text" pattern="(([0-9]{8}){1}$|admin)" placeHolder="Put ID Number Here" required aria-labelledby="idLabel" />
								</td>
							</tr>
							<tr>
								<td>
									<label id="passwordLabel" for="password">Password</label>
								</td>
								<td>
									<input id="password" name="password" type="password" placeHolder="password" required aria-labelledby="passwordLabel"/>
								</td>
							</tr>
						</table>
					</fieldset>
					<input id="submitButton" type="submit" value="Log in" disabled />
					<input type="reset" value="Cancel" />
				</form>
			</div>