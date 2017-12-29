/**
* @api {post} /activity 06.Save Activity
* @apiName saveActivity
* @apiGroup Time
* @apiVersion 0.1.0
*
*
* @apiParam  {Number} projectId  Project id.
* @apiParam  {String} name  Activity name.
* @apiSuccess  {Number} activityId Saved activity id.
*
*
* @apiSuccessExample Success-Response:
*     HTTP/1.1 200 OK
*
*      {
*        "success": "Successfully Saved"
*        "activityId": "1"
*      }
*
* @apiError Invalid Parameter.
*
* @apiErrorExample Error-Response:
*     HTTP/1.1 202 Activity Name Already Exists
*     {
*       "error": ["Activity Name Already Exists"]
*     }
* @apiError RecordNotFound.
*
* @apiErrorExample Error-Response:
*     HTTP/1.1 204 No Project Found
*     {
*       "error": ["No Projects Found"]
*     }
*
*/
