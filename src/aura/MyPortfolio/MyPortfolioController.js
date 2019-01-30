({
	redirectToContact : function(cmp, event, helper) {
		var loggedInUser;
        var state;
        console.log("init");
        
        var action = cmp.get("c.getLoggedInUser");
        action.setCallback(this, function(response){
            console.log("response : " ,response);
           state = response.getState();
            console.log("state : " ,state);
            if(state === 'SUCCESS'){
                loggedInUser = response.getReturnValue();
                console.log("loggedInUser : " , loggedInUser.ContactId);
                var navEvt = $A.get("e.force:navigateToSObject");
                navEvt.setParams({
                    'recordId' : loggedInUser.ContactId,
                    'slideDevName' : 'detail'
                });
                navEvt.fire();
            }
        });
        $A.enqueueAction(action);
	}
})