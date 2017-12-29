/**
* @api {post} /project 10.Save Project
* @apiName saveProject
* @apiGroup Time
* @apiVersion 0.1.0
*
* @apiParam  {Number} customerId  Customer id.
* @apiParam  {String} name  Project name.
* @apiParam  {String} [description]  Description.
* @apiParam  {String} [adminIds] project admin ids ( add up to 5 admin ids with comma separated ex 1,2,45,)
* @apiSuccess  {Number} projectId Saved project id.
*
*
* @apiSuccessExample Success-Response:
*     HTTP/1.1 200 OK
*
*      {
*        "success": "Successfully Saved",
*        "projectId": "1"
*      }
*
* @apiError Invalid Parameter.
*
* @apiErrorExample Error-Response:
*     HTTP/1.1 202 Invalid Parameter
*     {
*       "error": ["Customer Id Needed"]
*     }
*
* @apiError Invalid Parameter.
*
* @apiErrorExample Error-Response:
*     HTTP/1.1 202 Invalid Parameter
*     {
*       "error": ["Project Name Needed"]
*     }
*
*/
