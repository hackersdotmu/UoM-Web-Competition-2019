public class NapiliCommunityController {
	@AuraEnabled
    public static User getLoggedInUser(){
        return [SELECT id, ContactId FROM User WHERE id = :UserInfo.getUserId() LIMIT 1];
    }
}