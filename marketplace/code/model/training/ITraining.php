<?php
/**
 * Copyright 2014 Openstack Foundation
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * http://www.apache.org/licenses/LICENSE-2.0
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 **/
/**
 * Interface ITraining
 */
interface ITraining extends ICompanyService  {

	const MarketPlaceType           = 'Training';
	const MarketPlaceGroupSlug      = 'marketplace-training-administrators';
	const MarketPlacePermissionSlug = 'MANAGE_MARKETPLACE_TRAINING';

	public function getDescription();
	public function setDescription($description);

	/**
	 * @return ICourse[]
	 */
	public function getAssociatedCourses();

	/**
	 * @param ICourse $course
	 * @return void
	 */
	public function addAssociatedCourse(ICourse $course);

	/**
	 * @return void
	 */
	public function clearAssociatedCourses();
} 