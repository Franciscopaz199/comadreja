@extends('layouts.homees')
@section('css')
@endsection
@section('content')
<main class="main">
	<div class="responsive-wrapper">
		<div class="conta">
            <div class="main-header"> 
                <h1>Generando Plan de estudio</h1>
            </div>
            <div class="main-header">
                <p>Selecciona el modo</p>

            </div>
            <div class="horizontal-tabs">
                <a href="#" class="active">Automatico</a>
                <a href="#">Manual</a>
            </div>
        </div>
		<div class="content-header">
			<div class="content-header-intro">
				<h4>Modo Automatico </h4>
                <p><b>Instrucciones</b> selecciona la cantidad de clases que deseas cursar por periodo</p>
			</div>
		</div>
		<div class="content">
			<div class="content-panel">
				<div class="vertical-tabs">
					<a href="#" class="active">3 clases</a>
					<a href="#">4 Clases</a>
					<a href="#">5 Clases</a>
					
				</div>
			</div>
			<div class="content-main">
				<div class="card-grid">
					<article class="card">
						<div class="card-header">
							<div>
								<span><img src="https://assets.codepen.io/285131/zeplin.svg" /></span>
								<h3>Zeplin</h3>
							</div>
							<label class="toggle">
								<input type="checkbox" checked>
								<span></span>
							</label>
						</div>
						<div class="card-body">
							<p>Collaboration between designers and developers.</p>
						</div>
						<div class="card-footer">
							<a href="#">View integration</a>
						</div>
					</article>
					<article class="card">
						<div class="card-header">
							<div>
								<span><img src="https://assets.codepen.io/285131/github.svg" /></span>
								<h3>GitHub</h3>
							</div>
							<label class="toggle">
								<input type="checkbox" checked>
								<span></span>
							</label>
						</div>
						<div class="card-body">
							<p>Link pull requests and automate workflows.</p>
						</div>
						<div class="card-footer">
							<a href="#">View integration</a>
						</div>
					</article>
					<article class="card">
						<div class="card-header">
							<div>
								<span><img src="https://assets.codepen.io/285131/figma.svg" /></span>
								<h3>Figma</h3>
							</div>
							<label class="toggle">
								<input type="checkbox" checked>
								<span></span>
							</label>
						</div>
						<div class="card-body">
							<p>Embed file previews in projects.</p>
						</div>
						<div class="card-footer">
							<a href="#">View integration</a>
						</div>
					</article>
					<article class="card">
						<div class="card-header">
							<div>
								<span><img src="https://assets.codepen.io/285131/zapier.svg" /></span>
								<h3>Zapier</h3>
							</div>
							<label class="toggle">
								<input type="checkbox">
								<span></span>
							</label>
						</div>
						<div class="card-body">
							<p>Build custom automations and integrations with apps.</p>
						</div>
						<div class="card-footer">
							<a href="#">View integration</a>
						</div>
					</article>
					<article class="card">
						<div class="card-header">
							<div>
								<span><img src="https://assets.codepen.io/285131/notion.svg" /></span>
								<h3>Notion</h3>
							</div>
							<label class="toggle">
								<input type="checkbox" checked>
								<span></span>
							</label>
						</div>
						<div class="card-body">
							<p>Embed notion pages and notes in projects.</p>
						</div>
						<div class="card-footer">
							<a href="#">View integration</a>
						</div>
					</article>
					<article class="card">
						<div class="card-header">
							<div>
								<span><img src="https://assets.codepen.io/285131/slack.svg" /></span>
								<h3>Slack</h3>
							</div>
							<label class="toggle">
								<input type="checkbox" checked>
								<span></span>
							</label>
						</div>
						<div class="card-body">
							<p>Send notifications to channels and create projects.</p>
						</div>
						<div class="card-footer">
							<a href="#">View integration</a>
						</div>
					</article>
					<article class="card">
						<div class="card-header">
							<div>
								<span><img src="https://assets.codepen.io/285131/zendesk.svg" /></span>
								<h3>Zendesk</h3>
							</div>
							<label class="toggle">
								<input type="checkbox" checked>
								<span></span>
							</label>
						</div>
						<div class="card-body">
							<p>Link and automate Zendesk tickets.</p>
						</div>
						<div class="card-footer">
							<a href="#">View integration</a>
						</div>
					</article>
					<article class="card">
						<div class="card-header">
							<div>
								<span><img src="https://assets.codepen.io/285131/jira.svg" /></span>
								<h3>Atlassian JIRA</h3>
							</div>
							<label class="toggle">
								<input type="checkbox">
								<span></span>
							</label>
						</div>
						<div class="card-body">
							<p>Plan, track, and release great software.</p>
						</div>
						<div class="card-footer">
							<a href="#">View integration</a>
						</div>
					</article>
					<article class="card">
						<div class="card-header">
							<div>
								<span><img src="https://assets.codepen.io/285131/dropbox.svg" /></span>
								<h3>Dropbox</h3>
							</div>
							<label class="toggle">
								<input type="checkbox" checked>
								<span></span>
							</label>
						</div>
						<div class="card-body">
							<p>Everything you need for work, all in one place.</p>
						</div>
						<div class="card-footer">
							<a href="#">View integration</a>
						</div>
					</article>
					<article class="card">
						<div class="card-header">
							<div>
								<span><img src="https://assets.codepen.io/285131/google-chrome.svg" /></span>
								<h3>Google Chrome</h3>
							</div>
							<label class="toggle">
								<input type="checkbox" checked>
								<span></span>
							</label>
						</div>
						<div class="card-body">
							<p>Link your Google account to share bookmarks across your entire team.</p>
						</div>
						<div class="card-footer">
							<a href="#">View integration</a>
						</div>
					</article>
					<article class="card">
						<div class="card-header">
							<div>
								<span><img src="https://assets.codepen.io/285131/discord.svg" /></span>
								<h3>Discord</h3>
							</div>
							<label class="toggle">
								<input type="checkbox" checked>
								<span></span>
							</label>
						</div>
						<div class="card-body">
							<p>Keep in touch with your customers without leaving the app.</p>
						</div>
						<div class="card-footer">
							<a href="#">View integration</a>
						</div>
					</article>
					<article class="card">
						<div class="card-header">
							<div>
								<span><img src="https://assets.codepen.io/285131/google-drive.svg" /></span>
								<h3>Google Drive</h3>
							</div>
							<label class="toggle">
								<input type="checkbox">
								<span></span>
							</label>
						</div>
						<div class="card-body">
							<p>Link your Google account to share files across your entire team.</p>
						</div>
						<div class="card-footer">
							<a href="#">View integration</a>
						</div>
					</article>
				</div>
			</div>
		</div>
	</div>
    
</main>
<x-footer/>
@endsection

@section('scripts')
<script src="{{ asset('js/interactions.js') }}"></script>
@endsection
