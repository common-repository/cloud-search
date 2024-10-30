<?php

namespace WP_Cloud_Search\Aws\TranscribeService;

use WP_Cloud_Search\Aws\AwsClient;
/**
 * This client is used to interact with the **Amazon Transcribe Service** service.
 * @method \Aws\Result createCallAnalyticsCategory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCallAnalyticsCategoryAsync(array $args = [])
 * @method \Aws\Result createLanguageModel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLanguageModelAsync(array $args = [])
 * @method \Aws\Result createMedicalVocabulary(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMedicalVocabularyAsync(array $args = [])
 * @method \Aws\Result createVocabulary(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createVocabularyAsync(array $args = [])
 * @method \Aws\Result createVocabularyFilter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createVocabularyFilterAsync(array $args = [])
 * @method \Aws\Result deleteCallAnalyticsCategory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCallAnalyticsCategoryAsync(array $args = [])
 * @method \Aws\Result deleteCallAnalyticsJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCallAnalyticsJobAsync(array $args = [])
 * @method \Aws\Result deleteLanguageModel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLanguageModelAsync(array $args = [])
 * @method \Aws\Result deleteMedicalTranscriptionJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMedicalTranscriptionJobAsync(array $args = [])
 * @method \Aws\Result deleteMedicalVocabulary(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMedicalVocabularyAsync(array $args = [])
 * @method \Aws\Result deleteTranscriptionJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTranscriptionJobAsync(array $args = [])
 * @method \Aws\Result deleteVocabulary(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVocabularyAsync(array $args = [])
 * @method \Aws\Result deleteVocabularyFilter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVocabularyFilterAsync(array $args = [])
 * @method \Aws\Result describeLanguageModel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLanguageModelAsync(array $args = [])
 * @method \Aws\Result getCallAnalyticsCategory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCallAnalyticsCategoryAsync(array $args = [])
 * @method \Aws\Result getCallAnalyticsJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCallAnalyticsJobAsync(array $args = [])
 * @method \Aws\Result getMedicalTranscriptionJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMedicalTranscriptionJobAsync(array $args = [])
 * @method \Aws\Result getMedicalVocabulary(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMedicalVocabularyAsync(array $args = [])
 * @method \Aws\Result getTranscriptionJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTranscriptionJobAsync(array $args = [])
 * @method \Aws\Result getVocabulary(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getVocabularyAsync(array $args = [])
 * @method \Aws\Result getVocabularyFilter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getVocabularyFilterAsync(array $args = [])
 * @method \Aws\Result listCallAnalyticsCategories(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCallAnalyticsCategoriesAsync(array $args = [])
 * @method \Aws\Result listCallAnalyticsJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCallAnalyticsJobsAsync(array $args = [])
 * @method \Aws\Result listLanguageModels(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLanguageModelsAsync(array $args = [])
 * @method \Aws\Result listMedicalTranscriptionJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMedicalTranscriptionJobsAsync(array $args = [])
 * @method \Aws\Result listMedicalVocabularies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMedicalVocabulariesAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result listTranscriptionJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTranscriptionJobsAsync(array $args = [])
 * @method \Aws\Result listVocabularies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listVocabulariesAsync(array $args = [])
 * @method \Aws\Result listVocabularyFilters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listVocabularyFiltersAsync(array $args = [])
 * @method \Aws\Result startCallAnalyticsJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startCallAnalyticsJobAsync(array $args = [])
 * @method \Aws\Result startMedicalTranscriptionJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startMedicalTranscriptionJobAsync(array $args = [])
 * @method \Aws\Result startTranscriptionJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startTranscriptionJobAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateCallAnalyticsCategory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateCallAnalyticsCategoryAsync(array $args = [])
 * @method \Aws\Result updateMedicalVocabulary(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateMedicalVocabularyAsync(array $args = [])
 * @method \Aws\Result updateVocabulary(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateVocabularyAsync(array $args = [])
 * @method \Aws\Result updateVocabularyFilter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateVocabularyFilterAsync(array $args = [])
 */
class TranscribeServiceClient extends AwsClient
{
}
