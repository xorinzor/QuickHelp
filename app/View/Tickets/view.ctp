<pre>
    <?php print_r($ticket);?>
</pre>
<div id="ticketInfo">
    <div class="row">
    	<div class="col-xs-12">
    		<h2 class="pull-left">Ticket #<?php echo $ticket['Ticket']['id']; ?></h2>
    
    		<div id="ticketOptionsGroup" class="btn-group pull-right" role="options">
    			<button type="button" class="btn btn-success"><i class="glyphicon glyphicon-ok"></i> Opgelost</button>
    			<button type="button" class="btn btn-warning"><i class="glyphicon glyphicon-ok"></i> Status aanpassen</button>
    			<button type="button" class="btn btn-info"><i class="glyphicon glyphicon-wrench"></i> Bewerken</button>
    		</div>
    	</div>
    </div>

    <hr />

    <div class="row">
    	<div class="col-xs-6">
    		<table class="table">
    			<tr>
    				<td>Status</td>
    				<td><span class="label <?php echo $ticket['Status']['class']; ?>"><?php echo $ticket['Status']['title']; ?></span></td>
    			</tr>
    			<tr>
    				<td>Prioriteit</td>
    				<td><span class="label <?php echo $ticket['Priority']['class']; ?>"><?php echo $ticket['Priority']['title']; ?></span></td>
    			</tr>
    			<tr>
    				<td>Afdeling</td>
    				<td><?php if(empty($ticket['Department']['id'])) { echo '<i>'.__('No department').'</i>'; } else { echo $ticket['Department']['name']; } ?></td>
    			</tr>
    			<tr>
    				<td>Datum aangemaakt</td>
    				<td><?php echo $ticket['Ticket']['created']; ?></td>
    			</tr>
    		</table>
    	</div>
    	<div class="col-xs-6">
    		<table class="table">
    			<tr>
    				<td><?php echo __('Name'); ?></td>
    				<td><?php echo $ticket['Customer']['firstname'] . ' ' . $ticket['Customer']['lastname']; ?></td>
    			</tr>
    			<tr>
    				<td><?php echo __('Email'); ?></td>
    				<td><?php echo $ticket['Customer']['email']; ?></td>
    			</tr>
    			<tr>
    				<td><?php echo __('Phone'); ?></td>
    				<td><?php echo $ticket['Customer']['phone']; ?></td>
    			</tr>
    			<tr>
    				<td><?php echo __('Created via'); ?></td>
    				<td>moet nog - web / medewerker / etc</td>
    			</tr>
    		</table>
    	</div>
    </div>
    <br />
    <div class="row">
    	<div class="col-xs-6">
    	    <table class="table">
    		    <tr>
    		        <td><?php echo __('Title'); ?></td>
                    <td><?php echo $ticket['Ticket']['title']; ?></td>
    		    </tr>
    			<tr>
    				<td><?php echo __('Subject'); ?></td>
    				<td>moet nog - software > office</td>
    			</tr>
    			<tr>
    				<td><?php echo __('Last update'); ?></td>
    				<td><?php if(count($ticket['Messages']) == 0) { echo $ticket['Ticket']['modified']; } else { echo ''; } ?></td>
    			</tr>
    		</table>
    	</div>
    	<div class="col-xs-6">
    		<table class="table">
    			<tr>
    				<td><?php echo __('Assigned to'); ?></td>
    				<td><?php if(empty($ticket['Assignee']['id'])) { echo '<i>'.__('Unassigned').'</i>'; } else { echo $ticket['Assignee']['firstname'] . ' ' . $ticket['Assignee']['lastname']; } ?></td>
    			</tr>
    			<tr>
    				<td><?php echo __('SLA'); ?></td>
    				<td><?php echo $ticket['Sla']['title']; ?></td>
    			</tr>
    			<tr>
    				<td><?php echo __('To be solved by'); ?></td>
    				<td>moet nog - 21-12-2014 21:22</td>
    			</tr>
    		</table>
    	</div>
    </div>
</div>

<hr />

<div id="messageContainer">
    <div class="ticketUpdateContainer">
    	<div class="alert alert-info shadowBorder">
    		<span class="time small">22-12-2014 01:07</span> <br />
    		<span class="text">Ticket #8572348 - Aangemaakt</span>
    	</div>
    </div>
    
    <div class="panel panel-default message shadowBorder">
    	<div class="panel-heading">
    		<span class="pull-left"><strong>Jorin Vermeulen</strong></span>
    		<span class="pull-right">22-12-2014 01:07</span>
    		<div class="clearfix"></div>
    	</div>
    
    	<div class="panel-body">
    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ornare pharetra mattis. Phasellus sed nisi dapibus, hendrerit felis ut, ultricies ex. Maecenas gravida felis vel sagittis ultricies. Sed sit amet rutrum est. Quisque sit amet sem a orci commodo dictum. Integer orci magna, maximus a dignissim eget, tempus vitae sapien. Curabitur sodales turpis ante, at posuere tellus tempor ac. Aliquam luctus lacinia lectus, id molestie quam venenatis in.</p>
    	</div>
    </div>
    
    <div class="panel panel-default message shadowBorder">
    	<div class="panel-heading">
    		<span class="pull-left"><strong>Xorinzor</strong></span>
    		<span class="pull-right">22-12-2014 01:08</span>
    		<div class="clearfix"></div>
    	</div>
    
    	<div class="panel-body">
    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ornare pharetra mattis. Phasellus sed nisi dapibus, hendrerit felis ut, ultricies ex. Maecenas gravida felis vel sagittis ultricies. Sed sit amet rutrum est. Quisque sit amet sem a orci commodo dictum. Integer orci magna, maximus a dignissim eget, tempus vitae sapien. Curabitur sodales turpis ante, at posuere tellus tempor ac. Aliquam luctus lacinia lectus, id molestie quam venenatis in.</p>
    	</div>
    </div>
    
    <div class="ticketUpdateContainer">
    	<div class="alert alert-info shadowBorder">
    		<span class="time small">22-12-2014 01:08</span> <br />
    		<span class="text">Ticket #8572348 - Status veranderd in: In behandeling</span>
    	</div>
    </div>
    
    <div class="ticketUpdateContainer">
    	<div class="alert alert-danger shadowBorder">
    		<span class="time small">22-12-2014 02:08</span> <br />
    		<span class="text">Ticket #8572348 - Gesloten door gebruiker</span>
    	</div>
    </div>
</div>